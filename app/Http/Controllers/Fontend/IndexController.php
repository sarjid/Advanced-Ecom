<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
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
        $hot_deals = Product::where('hot_deals',1)->where('status',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->get();
        $special_offers = Product::where('special_offer',1)->where('status',1)->orderBy('id','DESC')->get();
        $special_deals = Product::where('special_deals',1)->where('status',1)->orderBy('id','DESC')->get();
        $skip_category_0 = Category::skip(0)->first();
        $skip_category_1 = Category::skip(1)->first();
        $skip_category_2 = Category::skip(2)->first();
        $skip_brand_0 = Brand::skip(2)->first();
        $skip_product_0 = Product::where('status',1)->where('category_id',$skip_category_0->id)->orderBY('id','DESC')->get();
        $skip_product_1 = Product::where('status',1)->where('category_id',$skip_category_1->id)->orderBY('id','DESC')->get();
        $skip_product_2 = Product::where('status',1)->where('category_id',$skip_category_2->id)->orderBY('id','DESC')->get();
        $skip_product_brand_0 = Product::where('status',1)->where('brand_Id',$skip_brand_0->id)->orderBY('id','DESC')->get();

        return view('fontend.index',compact('categories','sliders','proudcts','featureds','hot_deals','special_offers','special_deals','skip_category_0','skip_product_0','skip_category_1','skip_product_1','skip_category_2','skip_product_2','skip_product_0','skip_product_brand_0','skip_brand_0'));
    }
    //
    public function singleProduct($id,$slug){
        $product = Product::findOrFail($id);
        $multiImgs = MultiImg::where('product_id',$id)->get();
        return view('fontend.single-product',compact('product','multiImgs'));
    }

    //tag wise product
    public function tagWiseProduct($tag){
        $products = Product::where('status',1)->where('product_tags_en',$tag)->orWhere('product_tags_bn',$tag)->orderBy('id','DESC')->paginate(1);
        $categories = Category::orderBy('category_name_en','ASC')->get();
        return view('fontend.tag-product',compact('products','categories'));
    }

    //subcategory wise product show
    public function subCatWiseProduct($subcat_id,$slug){
        $products = Product::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id','DESC')->paginate(1);
        $categories = Category::orderBy('category_name_en','ASC')->get();
        return view('fontend.sub-category-product',compact('products','categories'));
    }

    //subsubcatgory wise product show
    public function subSubCatWiseProduct($subsubcat_id,$slug){
        $products = Product::where('status',1)->where('subsubcategory_id',$subsubcat_id)->orderBy('id','DESC')->paginate(1);
        $categories = Category::orderBy('category_name_en','ASC')->get();
        return view('fontend.sub-sub-category-product',compact('products','categories'));
    }
}
