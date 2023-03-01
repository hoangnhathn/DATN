<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Ultilities\Constant;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    private $productService;
    private $productCategoryService;
    private $orderService;
    private $orderDetailService;
    public function __construct(ProductServiceInterface $productService,
                                ProductCategoryServiceInterface $productCategoryService,
                                OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService)
    {
        $this->productService = $productService;
        $this->productCategoryService=$productCategoryService;
        $this->orderService=$orderService;
        $this->orderDetailService=$orderDetailService;
    }
    public  function index()
    {
        $carts = Cart::content();
        $total =Cart::total();
        $subtotal =Cart::subtotal();

        $categories=$this->productCategoryService->all();

        return view('client.checkout.index',compact('carts','total','subtotal','categories'));
    }

    public function addOrder(Request $request)
    {
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);

        $carts = Cart::content();

        foreach ($carts as $cart){
            $data =[
                'order_id'=>$order->id,
                'product_id'=>$cart->id,
                'qty'=>$cart->qty,
                'total'=> $cart->qty * $cart->price,

            ];
            $this->orderDetailService->create($data);
        }

        Cart::destroy();

        return redirect('checkout/result')->with('notification','Đặt hàng thành công!');
    }

    public function result()
    {
        $notification = session('notification');
        $categories=$this->productCategoryService->all();
        return view('client.checkout.result',compact('notification','categories'));
    }
}
