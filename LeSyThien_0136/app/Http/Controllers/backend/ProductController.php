<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Product::where('lst_product.status', '!=', 0)
            ->join('lst_category', 'lst_category.id', '=', 'lst_product.category_id')
            ->join('lst_brand', 'lst_brand.id', '=', 'lst_product.brand_id')
            ->select('lst_product.id', 'lst_product.name', 'lst_product.image', 'lst_category.name as categoryname', 'lst_brand.name as brandname')
            ->orderBy('lst_product.created_at', 'desc')
            ->paginate(8);
        return view("backend.product.index", compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Category::where('status', '!=', '0')
            ->get();
        $html_category_id = "";
        foreach ($list as $item) {
            $html_category_id .= "<option value='" . $item->id . "'" . (($item->id == old('category_id')) ? ' selected ' : ' ') . ">" . $item->name . "</option>";
        }
        $list = Brand::where('status', '!=', '0')
            ->get();
        $html_brand_id = "";
        foreach ($list as $item) {
            $html_brand_id .= "<option value='" . $item->id . "'" . (($item->id == old('brand_id')) ? ' selected ' : ' ') . ">" . $item->name . "</option>";
        }
        return view("backend.product.create", compact("html_category_id", "html_brand_id"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name; //form
        $product->slug = Str::slug($request->title, '-');
        $product->detail = $request->detail; //form
        $product->description = $request->description; //form
        $product->price = $request->price; //form
        $product->pricesale = $request->pricesale; //form
        $product->category_id = $request->category_id; //form
        $product->brand_id = $request->brand_id; //form

        $product->created_at = date('Y-m-d H:i:s');
        $product->created_by = Auth::id() ?? 1;
        $product->status = $request->status; //form
        if ($request->hasFile('image')) {
            if (in_array($request->image->extension(), ["jpg", "png", "gif", "webp"])) {
                $fileName = time() . '_' . Str::random(10) . '.' . $request->image->extension();
                $request->image->move(public_path('images/product'), $fileName);
                $product->image = $fileName;
            }
        }
    


        if ($product->save()) {
            // Chuyển hướng người dùng về trang danh sách category với thông báo thành công

            return redirect()->route('admin.product.index')->with('success', 'product updated successfully.');
        }

        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.product.index')->with('error', 'Failed to update product.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $list = Product::where('status', '!=', 0)
            ->orderBy('created_at', 'desc')
            ->get();
        $list = Category::where('status', '!=', '0')
            ->get();
        $html_category_id = "";

        foreach ($list as $item) {
            if ($product->category_id == $item->id) {
                $html_category_id .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $html_category_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        $list = Brand::where('status', '!=', '0')
            ->get();
        $html_brand_id = "";

        foreach ($list as $item) {
            if ($product->brand_id == $item->id) {
                $html_brand_id .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $html_brand_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
        return view("backend.product.edit", compact("product", "html_category_id", "html_brand_id"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the product by its ID
        $product = Product::find($id);

        // If product not found, redirect back with error message
        if (!$product) {
            return redirect()->route('admin.product.index')->with('error', 'Product not found');
        }

        // Update product attributes with new data from the request
        $product->name = $request->name;
        $product->detail = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price; //form
        $product->pricesale = $request->pricesale; //form
        $product->status = $request->status;

        // Handle image update
        if ($request->hasFile('image')) {
            if (in_array($request->image->extension(), ["jpg", "png", "gif", "webp"])) {
                $fileName = time() . '_' . Str::random(10) . '.' . $request->image->extension();
                $request->image->move(public_path('images/product'), $fileName);
                $product->image = $fileName;
            }
        }
        if ($product->save()) {
            // Chuyển hướng người dùng về trang danh sách category với thông báo thành công

            return redirect()->route('admin.product.index')->with('success', 'product updated successfully.');
        }

        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.product.index')->with('error', 'Failed to update product.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status(string $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->status = $product->status == 1 ? 2 : 1;
            $product->save();
        } else {
            $product = new product();
            $product->id = $id; // Ensure the new product has the provided ID
            $product->status = 1; // Default value or another value as needed
            $product->save();
        }


        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.product.index')->with('success', 'product updated successfully.');
    }
    public function destroy(string $id)
    {
        $product = product::find($id);
        if ($product) {
            // Set the product status to 0
            $product->status = 0;
        }
        $product->save();
        // Redirect with success message
        return redirect()->route('admin.product.index')->with('success', 'product updated successfully.');
    }
    public function trash()
    {
        $list = Product::where('lst_product.status', '=', 0)
            ->join('lst_category', 'lst_category.id', '=', 'lst_product.category_id')
            ->join('lst_brand', 'lst_brand.id', '=', 'lst_product.brand_id')
            ->select('lst_product.id', 'lst_product.id', 'lst_product.name', 'lst_product.image', 'lst_category.name as categoryname', 'lst_brand.name as brandname')
            ->orderBy('lst_product.created_at', 'desc')
            ->get();
        return view("backend.product.trash", compact("list"));
    }
    public function restore(string $id)
    {
        $product = product::find($id);
        if ($product) {
            // Set the product status to 0
            $product->status = 1;
        }
        $product->save();
        // Redirect with success message
        return redirect()->route('admin.product.trash')->with('success', 'product updated successfully.');
    }
    public function delete(string $id)
    {
        $product = product::find($id);

        // Set the product status to 0
        $product->delete();

        // Redirect with success message
        return redirect()->route('admin.product.trash')->with('success', 'product updated successfully.');
    }
}
