<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MultiImg;
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
        $featureds = Product::where('featured',1)->where('status',1)->orderBy('id','DESC')->get();
        $hot_deals = Product::where('hot_deals',1)->where('status',1)->orderBy('id','DESC')->get();
        $special_offers = Product::where('special_offer',1)->where('status',1)->orderBy('id','DESC')->get();
        $special_deals = Product::where('special_deals',1)->where('status',1)->orderBy('id','DESC')->get();

        return view('fontend.index',compact('categories','sliders','proudcts','featureds','hot_deals','special_offers','special_deals'));
    }
    //
    public function singleProduct($id,$slug){
        $product = Product::findOrFail($id);
        $multiImgs = MultiImg::where('product_id',$id)->get();
        return view('fontend.single-product',compact('product','multiImgs'));
    }
}
