<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::join('lst_topic', 'lst_post.topic_id', '=', 'lst_topic.id')
        ->where('lst_post.status', '!=', '0')
        ->orderBy('lst_post.created_at', 'desc')
        ->select("lst_post.*", "lst_topic.name as topic_name")
        ->get();
    $title = 'Tất Cả  Bài Viết';
    return view("backend.post.index", compact("list"));

}

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
    $title = 'Thêm Bài Viết';
    $list = Topic::where('status', '!=', '0')
        ->get();
    $html_topic_id = "";
    foreach ($list as $item) {
        $html_topic_id .= "<option value='" . $item->id . "'" . (($item->id == old('topic_id')) ? ' selected ' : ' ') . ">" . $item->name . "</option>";
    }

        return view("backend.post.create", compact('title', 'html_topic_id'));

    }
  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title, '-');
        $post->detail = $request->detail;
        $post->status = $request->status;
        $post->topic_id = $request->topic_id;
      
        $post->created_at = date('Y-m-d H:i:s');
        $post->created_by=Auth::id()??1;        //upload file

        if($request->image){
            if(in_array($request->image->extension(),["jpg", "png", "gif", "webp"])){
                $fileName=$post->slug. '.'. $request->image->extension();
                $request->image->move(public_path('images/post'), $fileName);
                $post->image=$fileName;
            }
        }
        
                $post->save();
                return redirect()->route('admin.post.index');
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
        $post=Post::find($id);
        $list = Post::where('status', '!=', 0)
        ->orderBy('created_at', 'desc')
        ->get();
        $list = Topic::where('status', '!=', '0')
        ->get();
        $html_topic_id = "";

        foreach ($list as $item) {
            if ($post->topic_id == $item->id) {
                $html_topic_id .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";
            } else {
                $html_topic_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
        }
                return view("backend.post.edit",compact("post","html_topic_id"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('admin.post.index')->with('error', 'Post not found');
        }
    
        $post->title = $request->title;
        $post->slug = Str::slug($request->title, '-');
        $post->detail = $request->detail;
        $post->status = $request->status;
        $post->topic_id = $request->topic_id;
        $post->updated_at = now();
        $post->updated_by = Auth::id() ?? 1;
    
        if ($request->hasFile('image')) {
            if (in_array($request->image->extension(), ["jpg", "png", "gif", "webp"])) {
                // Remove the old image if exists
                if ($post->image && file_exists(public_path('images/post/' . $post->image))) {
                    unlink(public_path('images/post/' . $post->image));
                }
    
                // Upload the new image
                $fileName = $post->slug . '.' . $request->image->extension();
                $request->image->move(public_path('images/post'), $fileName);
                $post->image = $fileName;
            }
        }
    
        if ($post->save()) {
            // Chuyển hướng người dùng về trang danh sách post với thông báo thành công
            
            return redirect()->route('admin.post.index')->with('success', 'post updated successfully.');
        }
    
        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.post.index')->with('error', 'Failed to update post.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status(string $id){
        $post = post::find($id);
        if($post){
            $post->status = $post->status == 1 ? 2 : 1;
            $post->save();
        } else {
            $post = new post();
            $post->id = $id; // Ensure the new post has the provided ID
            $post->status = 1; // Default value or another value as needed
            $post->save();
        }
     
    
        // Nếu lưu không thành công, chuyển hướng với thông báo lỗi
        return redirect()->route('admin.post.index')->with('success', 'post updated successfully.');
     }
     public function destroy(string $id)
     {
         $post = post::find($id);
         if ($post) {
             // Set the post status to 0
             $post->status = 0;
     
         }
             $post->save();
         // Redirect with success message
         return redirect()->route('admin.post.index')->with('success', 'post updated successfully.');
        }
        public function trash(){
            $list = post::where('status', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();
            return view("backend.post.trash",compact("list"));
        }
        public function restore(string $id)
        {
            $post = post::find($id);
            if ($post) {
                // Set the post status to 0
                $post->status = 1;
        
            }
                $post->save();
            // Redirect with success message
            return redirect()->route('admin.post.trash')->with('success', 'post updated successfully.');
           }
           public function delete(string $id)
           {
               $post = post::find($id);
               
                   // Set the post status to 0
                   $post->delete();
           
               // Redirect with success message
               return redirect()->route('admin.post.trash')->with('success', 'post updated successfully.');
              }
         
}
