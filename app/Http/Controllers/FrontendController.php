<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use App\Product;

class FrontendController extends Controller
{
    // Xử lý trang chi tiết tin tức
    public function newsDetail($slug, $id){
        $news = Post::where(["status" => "PUBLISHED", "slug" => $slug, "id" => $id])->first();
        
        return view('theme-default.pages.news-detail')->with(['news' => $news]);
    }

    // Xử lý trang chi tiết sản phẩm
    public function productDetail($slug, $id){
        $product = Product::where(["slug" => $slug, "id" => $id])->first();
        
        return view('theme-default.pages.product-detail')->with(['product' => $product]);
    }

    // Xử lý trang Tuyển Dụng
    public function recruitment(){
        $page = Page::where(["status" => "ACTIVE", "slug" => 'tuyen-dung'])->first();
        // $news_others = Post::where(["status" => "PUBLISHED"])
        //         ->orderBy('created_at', 'desc')
        //         ->skip(4)->take(5)->get();
            
        return view('theme-default.pages.recruitment')->with(['page' => $page]);
    }
}
