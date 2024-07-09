<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        return view("frontend.contact");
    }
    public function contact(Request $request)
    {
        
            $banner=new Contact();
            $banner->name=$request->name; //form
            $banner->email=$request->email;
            $banner->phone=$request->phone;//form
            $banner->title=$request->title;//form
            $banner->content=$request->content;//form
            $banner->created_at=date('Y-m-d H:i:s');
            $banner->status=1;//form
           
            
            $banner->save();
            return redirect()->route('contact.index')->with('success', 'Gửi liên hệ thành công.');   
         
    
    }
}
