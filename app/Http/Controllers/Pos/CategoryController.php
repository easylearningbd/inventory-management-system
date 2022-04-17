<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;


class CategoryController extends Controller
{
    public function CategoryAll(){

        $categoris = Category::latest()->get();
        return view('backend.category.category_all',compact('categoris'));

    } // End Mehtod 
}
 