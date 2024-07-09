<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $list_cart = session('carts', []);
        return view('frontend.cart', compact('list_cart'));
    }

    public function addCart(Request $request)
    {
        $productid = $request->input('productid');
        $qty = $request->input('qty');
        $product = Product::find($productid);

        if (!$product) {
            return response()->json(['message' => 'Sản phẩm không tìm thấy'], 404);
        }

        $cartitem = [
            'id' => $productid,
            'image' => $product->image,
            'name' => $product->name,
            'qty' => $qty,
            'price' => ($product->pricesale > 0) ? $product->pricesale : $product->price,
        ];

        $carts = session('carts', []);

        $found = false;
        foreach ($carts as &$cart) {
            if ($cart['id'] == $productid) {
                $cart['qty'] += $qty;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $carts[] = $cartitem;
        }

        session(['carts' => $carts]);

        return response()->json(['message' => 'Sản phẩm đã được thêm vào giỏ hàng thành công']);
    }
    public function update(Request $request)
    {
        $carts = session('carts', []);
        $list_qty = $request->qty;
        foreach ($carts as $key => $cart) {
            foreach ($list_qty as $productid => $qtyvalue) {
                if ($carts[$key]['id'] == $productid) {
                    $carts[$key]['qty'] = $qtyvalue;
                }
            }
        }

        session(['carts' => $carts]);
        return redirect()->route('cart.index');
    }
    public function detele($id)
    {
        $carts = session('carts', []);
        foreach ($carts as $key => $cart) {
            if ($carts[$key]['id'] == $id) {
                unset($carts[$key]);
            }
        }

        session(['carts' => $carts]);
        return redirect()->route('cart.index');
    }
    public function checkout(){
        $list_cart = session('carts', []);
        return view('frontend.checkout', compact('list_cart'));
    }
    public function docheckout(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('website.getlogin')->with('error', 'Bạn cần đăng nhập để tiếp tục.');
        }

        $user = Auth::user();
        $carts = session('carts', []);

        if (count($carts) > 0) {
            // Cập nhật thông tin người dùng
            try {
                $user->email = $request->input('email');
                $user->phone = $request->input('phone');
                $user->address = $request->input('address');
                
                $user->save();
            } catch (\Exception $e) {
                return redirect()->route('cart.index')->with('error', 'Đã có lỗi xảy ra khi cập nhật thông tin người dùng: ' . $e->getMessage());
            }

            // Tạo đơn hàng mới
            try {
                $order = new Order();
                $order->user_id = $user->id;
                $order->delivery_name = $request->input('name');
                $order->delivery_gender = $user->gender;
                $order->delivery_email = $request->input('email');
                $order->delivery_phone = $request->input('phone');
                $order->delivery_address = $request->input('address');
                $order->note = $request->input('note');
                $order->created_at = now();
                $order->type = 'online';
                $order->status = 2;

                if ($order->save()) {
                    foreach ($carts as $cart) {
                        $orderdetail = new Orderdetail();
                        $orderdetail->order_id = $order->id;
                        $orderdetail->product_id = $cart['id'];
                        $orderdetail->price = $cart['price'];
                        $orderdetail->qty = $cart['qty'];
                        $orderdetail->discount = 0;
                        $orderdetail->amount = $cart['price'] * $cart['qty'];
                        $orderdetail->save();
                    }
                    // Xóa giỏ hàng sau khi đặt hàng thành công
                    session(['carts' => []]);

                    return redirect()->route('cart.index')->with('success', 'Đặt hàng thành công');
                } else {
                    return redirect()->route('cart.index')->with('error', 'Đã có lỗi xảy ra khi đặt hàng');
                }
            } catch (\Exception $e) {
                return redirect()->route('cart.index')->with('error', 'Đã có lỗi xảy ra khi tạo đơn hàng: ' . $e->getMessage());
            }
        }

        return redirect()->route('cart.index')->with('error', 'Giỏ hàng trống');
    }
    
 

}
