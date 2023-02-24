<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    private $productService;
    private $productCategoryService;
    public function __construct(ProductServiceInterface $productService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this->productService = $productService;
        $this->productCategoryService=$productCategoryService;
    }

    public function index()
    {
        $carts = Cart::content();
        $total =Cart::total();
        $subtotal =Cart::subtotal();

        $categories=$this->productCategoryService->all();

        return view('client.cart.cart',compact('carts','total','subtotal','categories'));
    }

    public function add($id)
    {
        $product = $this->productService->find($id);
        Cart::add([
            'id'=>$product->id,
            'name'=>$product->product_name,
            'qty'=>1,
            'price'=>$product->discount ?? $product->price,
            'weight'=>$product->weight ?? 0,
            'options'=>[
                'images'=>$product->productImages,
            ],
        ]);

        return back();
    }
}
