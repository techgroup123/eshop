<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Subcategory;
use App\Slider;
use App\Logo;
use App\Topmail;
use App\Hotnumber;

class FrontEndController extends Controller
{
    public function index () {
        $categories=Category::all();
        $activeSliders =Slider::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeLogos =Logo::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeTopmails =Topmail::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeHotnumbers =Hotnumber::where('publicationStatus','1')->orderBY('id', 'desc')->get();
    	return view ('frontEnd.home.home',compact('categories','activeSliders','activeLogos','activeTopmails','activeHotnumbers'));
    }

    public function postByCategory ($slug) {
        $categories=Category::all();
        $activeLogos =Logo::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeTopmails =Topmail::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeHotnumbers =Hotnumber::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $category = Category::where('slug',$slug)->first();

        
        return view ('frontEnd.category.category',compact('category','categories','activeLogos','activeTopmails','activeHotnumbers'));
    }
    public function postBySubCategory ($slug) {
        $categories=Category::all();
        $activeLogos =Logo::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeTopmails =Topmail::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeHotnumbers =Hotnumber::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $subcategory = Subcategory::where('slug',$slug)->first();
        
        
        return view ('frontEnd.subcategory.subcategory',compact('subcategory','categories','activeLogos','activeTopmails','activeHotnumbers'));
    }
    public function postByBrand ($slug) {
        $categories=Category::all();
        $activeLogos =Logo::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeTopmails =Topmail::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $activeHotnumbers =Hotnumber::where('publicationStatus','1')->orderBY('id', 'desc')->get();
        $brand = Brand::where('slug',$slug)->first();
        $brands=Brand::all();
        
        return view ('frontEnd.brand.brand',compact('brand','brands','categories','activeLogos','activeTopmails','activeHotnumbers'));
    }
}
