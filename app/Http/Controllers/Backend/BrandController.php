<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands=Brand::orderBy('id','DESC')->paginate(10);
        return view('admin.brands.index',compact('brands'));
    }
}
