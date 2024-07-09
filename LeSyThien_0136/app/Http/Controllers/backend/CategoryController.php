<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::where('status', '!=', 0)
        ->orderBy('created_at', 'desc')
        ->orderBy('created_at', 'desc')
       ->paginate(5);
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $item){
            $htmlparentid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            $htmlsortorder .= "<option value='" . ($item->sort_order+1) . "'>Sau " . $item->name . "</option>";
        }
        return view("backend.category.index",compact("list","htmlparentid","htmlsortorder"));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::of($request->name)->slug('-');
        $category->parent_id =$request->parent_id;
        $category->sort_order =$request->sort_order;
        $category->description =$request->description;
        $category->created_at =date('Y-m-d H:i:s');
        $category->created_by =Auth::id()??1;
        $category->status = $request->status;
if($request->image){
    if(in_array($request->image->extension(),["jpg", "png", "gif", "webp"])){
        $fileName=$category->slug. '.'. $request->image->extension();
        $request->image->move(public_path('images/category'), $fileName);
        $category->image=$fileName;
    }
}

        $category->save();
        return redirect()->route('admin.category.index');
     
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
        $category=Category::find($id);
        $list = Category::where('status', '!=', 0)
        ->orderBy('created_at', 'desc')
        ->get();
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $item){
            if($category->id == $item->id){
                $htmlparentid .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            }
            else{
                $htmlparentid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
            
            if ($category->sort_order - 1 == $item->sort_order) {
                $htmlsortorder .= "<option selected value='" . ($item->sort_order + 1) . "'>sau " . $item->name . "</option>";
            } else {
                $htmlsortorder .= "<option value='" . ($item->sort_order + 1) . "'>sau " . $item->name . "</option>";
            }
            
          
        }
                return view("backend.category.edit",compact("category","htmlparentid","htmlsortorder"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, string $id)
    {
        // Lấy category từ database
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('admin.category.index')->with('error', 'Category not found.');
        }
    
        // Cập nhật các thuộc tính của category
        $category->name = $request->name;
        $category->slug = Str::of($request->name)->slug('-');
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        $category->description = $request->description;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->updated_by = Auth::id() ?? 1;
        $category->status = $request->status;
    
        // Xử lý việc upload và lưu hình ảnh
        if ($request->hasFile('image')) {
            if (in_array($request->image->extension(), ["jpg", "png", "gif", "webp"])) {
                $fileName = $category->slug . '.' . $request->image->extension();
                $request->image->move(public_path('images/category'), $fileName);
                $category->image = $fileName;
            }
        }
    
        // Lưu các thay đổi vào database
        if ($category->save()) {
            // Chuyển hướng người dùng về trang danh sách category với thông báo thành công
            
            return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
        }
    
        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.category.index')->with('error', 'Failed to update category.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function status(string $id){
        $category = Category::find($id);
        if($category){
            $category->status = $category->status == 1 ? 2 : 1;
            $category->save();
        } else {
            $category = new Category();
            $category->id = $id; // Ensure the new category has the provided ID
            $category->status = 1; // Default value or another value as needed
            $category->save();
        }
     
    
        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.category.index')->with('success', 'category updated successfully.');
     }
     public function destroy(string $id)
     {
         $category = Category::find($id);
         if ($category) {
             // Set the category status to 0
             $category->status = 0;
     
         }
             $category->save();
         // Redirect with success message
         return redirect()->route('admin.category.index')->with('success', 'category updated successfully.');
        }
        public function trash(){
            $list = Category::where('status', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();
            return view("backend.category.trash",compact("list"));
        }
        public function restore(string $id)
        {
            $category = Category::find($id);
            if ($category) {
                // Set the category status to 0
                $category->status = 1;
        
            }
                $category->save();
            // Redirect with success message
            return redirect()->route('admin.category.trash')->with('success', 'category updated successfully.');
           }
           public function delete(string $id)
           {
               $category = Category::find($id);
               
                   // Set the category status to 0
                   $category->delete();
           
               // Redirect with success message
               return redirect()->route('admin.category.trash')->with('success', 'category updated successfully.');
              }
         
}
