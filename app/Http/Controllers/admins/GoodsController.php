<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //add method
    public function add(){
    	return view('admin/goods/add');
    }
    //detail method
    public function detail(){
    	return view('admin/goods/detail');
    }
    //edit method
    public function edit(){
    	return view('admin/goods/edit');
    }
    //list method
    public function list(){
    	return view('admin/goods/list');
    }
}
