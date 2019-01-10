<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

////  view方法第一个参数是视图的路径名称   第二个参数与视图绑定的数据（可选）

class StaticPagesController extends Controller
{
    public function home()
        {
    return view('static_pages/home'); }
        public function help()
        {
    return view('static_pages/help'); }
        public function about()
        {
    return view('static_pages/about');}
}

