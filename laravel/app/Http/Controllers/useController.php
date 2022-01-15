<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class useController extends Controller
{
    /**
     * 使用金入力画面
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function useInfo()
    {
        return view('/useFunc/useInfo');
    }
}
