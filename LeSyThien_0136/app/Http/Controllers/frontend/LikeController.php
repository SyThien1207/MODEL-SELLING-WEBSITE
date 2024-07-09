<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class LikeController extends Controller
{   
    public function index()
    {
        $list_like = session('likes', []);
        return view('frontend.like', compact('list_like'));
    }
    public function addlike(Request $request)
    {
        $productid = $request->input('productid');
        $product = Product::find($productid);
    
        if (!$product) {
            return response()->json(['message' => 'Sản phẩm không tìm thấy'], 404);
        }
    
        $likeitem = [
            'id' => $productid,
            'image' => $product->image,
            'name' => $product->name,
            'price' => ($product->pricesale > 0) ? $product->pricesale : $product->price,

        ];
    
        $likes = session('likes', []);
    
        // Kiểm tra nếu sản phẩm đã tồn tại trong danh sách yêu thích
        foreach ($likes as $like) {
            if ($like['id'] == $productid) {
                return response()->json(['message' => 'Sản phẩm đã có trong danh sách yêu thích']);
            }
        }
    
        // Thêm sản phẩm vào danh sách yêu thích
        $likes[] = $likeitem;
    
        session(['likes' => $likes]);
    
        return response()->json(['message' => 'Sản phẩm đã được thêm vào danh sách yêu thích thành công']);
    }
    public function detele($id)
    {
        $likes = session('likes', []);
        foreach ($likes as $key => $like) {
            if ($likes[$key]['id'] == $id) {
                unset($likes[$key]);
            }
        }

        session(['likes' => $likes]);
        return redirect()->route('like.index');
    }
    
}
