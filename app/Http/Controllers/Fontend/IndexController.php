<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // index page

    public function index(){
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(5)->get();
        $proudcts = Product::where('status',1)->orderBy('id','DESC')->get();
        return view('fontend.index',compact('categories','sliders','proudcts'));
    }
}
