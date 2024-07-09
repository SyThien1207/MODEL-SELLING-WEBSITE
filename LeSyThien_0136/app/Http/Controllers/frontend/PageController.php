<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function goithieu(){
        return view("pages.gioithieu");
    }
    public function muahang(){
        return view("pages.muahang");
    }  public function baohanh(){
        return view("pages.baohanh");
    }  public function vanchuyen(){
        return view("pages.vanchuyen");
    }  public function doitra(){
        return view("pages.doitra");
    }
}
