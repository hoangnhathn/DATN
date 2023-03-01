<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryService;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class ProductController extends Controller
{
    private $productSevice;
    private $productCommentSevice;
    private $productCategoryService;
    public function __construct(ProductServiceInterface $productService,
                                ProductCommentServiceInterface $productCommentService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this->productSevice = $productService;
        $this->productCommentSevice = $productCommentService;
        $this->productCategoryService=$productCategoryService;
    }

    //
    public function show($id){
        $product = $this->productSevice->find($id);
        $relatedProduct = $this->productSevice->getRelatedProducts($product);
        $categories=$this->productCategoryService->all();
        $categories1=$this->productCategoryService->all();
        $slider = Slider::all();
        return view('client.products.product',compact('product','relatedProduct','categories','categories1','slider'));
    }

    public function postComment(Request $request)
    {
        $this->productCommentSevice->create($request->all());

        return redirect()->back();
    }

    public function index(Request $request)
    {
        $categories=$this->productCategoryService->all();
        $categories1=$this->productCategoryService->all();
        $allProducts = $this->productSevice->getProductOnIndex($request);
        $slider = Slider::all();
        return view('client.products.index',compact('allProducts','categories','categories1','slider'));
    }

    public function categories($categoryName, Request $request)
    {
        $categories=$this->productCategoryService->all();
        $categories1=$this->productCategoryService->all();
        $allProducts = $this->productSevice->getProductsByCategory($categoryName,$request);
        $slider = Slider::all();
        return view('client.products.index',compact('allProducts','categories','categories1','slider'));
    }
}
