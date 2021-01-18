<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
class ProductCategoryController extends Controller
{
    public function index(){
        $categories = ProductCategory::all();
        return view('home', compact('categories'));
    }
}
