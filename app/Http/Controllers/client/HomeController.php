<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;

class HomeController extends Controller
{
    private $productService;
    private $blogService;
    private $productCategoryService;

    public function __construct(ProductServiceInterface $productService,
                                BlogServiceInterface $blogService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this->productService=$productService;
        $this->blogService=$blogService;
        $this->productCategoryService=$productCategoryService;
    }

    public function index(){

        $allProducts = $this->productService->all();
        $featuredProducts=$this->productService->getFeaturedProduct();
        $productsByCat=$this->productService->getProductsByCate();
        $blogs = $this->blogService->getLatestBlogs();
        $categories=$this->productCategoryService->all();
        $categories1=$this->productCategoryService->all();
        $slider = Slider::all();
        return view('client.home.home', compact('allProducts','blogs','featuredProducts','productsByCat','categories','categories1','slider'));
    }

}
