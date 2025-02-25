<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $list = Banner::where('status', '!=', 0)
        ->orderBy('created_at', 'desc')
        ->get();
        return view("backend.banner.index",compact("list"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Banner::where('lst_banner.status','!=',0)
        ->orderBy('lst_banner.created_at','desc')
        ->get();
        $htmlposition = "";
        foreach ($list as $item){
            $htmlposition .= "<option value='" . ($item->position) . "'> " . $item->position . "</option>";
        }
        return view("backend.banner.create",compact("list","htmlposition"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $banner=new Banner();
            $banner->name=$request->name; //form
            $banner->link=$request->link;
            $banner->position='slideshow';//form
            $banner->description=$request->description;//form
            $banner->created_at=date('Y-m-d H:i:s');
            $banner->created_by=Auth::id()??1;
            $banner->status=$request->status;//form
            if ($request->hasFile('image')) {
                if (in_array($request->image->extension(), ["jpg", "png", "gif", "webp"])) {
                    $fileName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('images/banner'), $fileName);
                    $banner->image = $fileName;
                }
            }
            
            $banner->save();
            return redirect()->route('admin.banner.index')->with('success', 'banner updated successfully.');
         
    
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
        $banner=Banner::find($id);
        $list = Banner::where('status', '!=', 0)
        ->orderBy('created_at', 'desc')
        ->get();
        $htmlposition = "";
        foreach ($list as $item){
          
            if($banner->id == $item->id){
                $htmlposition .= "<option selected value='" . $item->position . "'>" . $item->position . "</option>";
            }
            else{
                $htmlposition .= "<option value='" . $item->position . "'>" . $item->position . "</option>";
            }
          
        }
        return view("backend.banner.edit",compact("banner","htmlposition"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        if (!$banner) {
            return redirect()->route('admin.banner.index')->with('error', 'Banner not found');
        }

        $banner->name = $request->name;
        $banner->link = $request->link;
        $banner->position = $request->position;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->updated_at = date('Y-m-d H:i:s');
        $banner->updated_by = Auth::id() ?? 1;

        if ($request->hasFile('image')) {
            if (in_array($request->image->extension(), ["jpg", "png", "gif", "webp"])) {
                // Remove the old image if exists
                if ($banner->image && file_exists(public_path('images/banner/' . $banner->image))) {
                    unlink(public_path('images/banner/' . $banner->image));
                }

                // Upload the new image
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/banner'), $fileName);
                $banner->image = $fileName;
            }
        }

        if ($banner->save()) {
            // Chuyển hướng người dùng về trang danh sách banner với thông báo thành công
            
            return redirect()->route('admin.banner.index')->with('success', 'banner updated successfully.');
        }
    
        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.banner.index')->with('error', 'Failed to update banner.');
    }
    /**
     * Remove the specified resource from storage.
     */

     public function status(string $id){
        $banner = Banner::find($id);
        if($banner){
            $banner->status = $banner->status == 1 ? 2 : 1;
            $banner->save();
        } else {
            $banner = new Banner();
            $banner->id = $id; // Ensure the new banner has the provided ID
            $banner->status = 1; // Default value or another value as needed
            $banner->save();
        }
     
    
        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.banner.index')->with('success', 'banner updated successfully.');
     }
     public function destroy(string $id)
     {
         $banner = Banner::find($id);
         if ($banner) {
             // Set the banner status to 0
             $banner->status = 0;
     
         }
             $banner->save();
         // Redirect with success message
         return redirect()->route('admin.banner.index')->with('success', 'banner updated successfully.');
        }
        public function trash(){
            $list = Banner::where('status', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();
            return view("backend.banner.trash",compact("list"));
        }
        public function restore(string $id)
        {
            $banner = Banner::find($id);
            if ($banner) {
                // Set the banner status to 0
                $banner->status = 1;
        
            }
                $banner->save();
            // Redirect with success message
            return redirect()->route('admin.banner.trash')->with('success', 'banner updated successfully.');
           }
           public function delete(string $id)
           {
               $banner = Banner::find($id);
               
                   // Set the banner status to 0
                   $banner->delete();
           
               // Redirect with success message
               return redirect()->route('admin.banner.trash')->with('success', 'banner updated successfully.');
              }
         
}
