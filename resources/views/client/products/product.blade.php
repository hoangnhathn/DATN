@extends('client.layout.master')
@section('title', 'Product')
@section('content')
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="client/images/{{$product->productImages[0]->path}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										@foreach($product->productImages as $productImage)
										<div class="item active">
										  <a href=""><img src="client/images/{{$productImage->path}}" alt=""></a>
										</div>
										@endforeach

									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$product->product_name}}</h2>
								<p><b>Xếp hạng:</b> {{$product->avgRating}}/5</p>
								@if($product->qty != 0)
									<p><b>Tình trạng:</b> Còn hàng({{$product->qty}}) </p>
								@else
									<p><b>Tình trạng:</b> Hết hàng </p>
								@endif
								<p><b>Màu sắc:</b> {{$product->productColor}}</p>
								<p><b>Kích thước:</b> {{$product->productSize}}</p>
								<p><b>Cân nặng:</b> {{$product->weight}}kg</p>
								<p><b>Sku:</b> {{$product->sku}}</p>
								<p><b>Category:</b> {{$product->productCategory->category_name}}</p>
								<p><b>Tag:</b> {{$product->tag}}</p>
                                <span>
                                    @if($product->discount != null)
                                        <span>Sale {{$product->discount}}</span>
                                        <span>{{$product->price}}</span>
                                    @else
                                        <span>{{$product->price}}</span>
                                    @endif
                                </span>
								<span>
									<label>Số lượng:</label>
									<input type="text" value="1" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										<a href="cart/add/{{$product->id}}">Thêm vào giỏ</a>
									</button>
								</span>
								<a href=""><img src="client/images/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Details</a></li>
								<li ><a href="#reviews" data-toggle="tab">Reviews ({{count($product->productComments)}})</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								{{$product->description}}
							</div>

							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
								@foreach($product->productComments as $productComment)
									<ul>
										<li><a href=""><i class="fa fa-user"></i>{{$productComment->name}}</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>{{date('M d, Y',strtotime($productComment->created_at))}}</a></li>
									</ul>
									<p>{{$productComment->messages}}</p>

								@endforeach
									<p><b>Write Your Review</b></p>
									<form action="" method="post">
										@csrf
										<input type="hidden" name="product_id" value="{{$product->id}}">
										<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id ?? null}}">
										<span>
											<input type="text" name="name" placeholder="Your Name"/>
											<input type="email" name="email" placeholder="Email Address"/>
										</span>
										<textarea name="messages" ></textarea>
										<b>Rating: </b>
										<div class="personal-rating">
											<h6>Your Rating</h6>
											<div class="rate">
												<input type="radio" id="star5" name="rating" value="5" />
												<label for="star5" title="text">5 sao</label>
												<input type="radio" id="star4" name="rating" value="4" />
												<label for="star4" title="text">4 sao</label>
												<input type="radio" id="star3" name="rating" value="3" />
												<label for="star3" title="text">3 sao</label>
												<input type="radio" id="star2" name="rating" value="2" />
												<label for="star2" title="text">2 sao</label>
												<input type="radio" id="star1" name="rating" value="1" />
												<label for="star1" title="text">1 sao</label>
											</div>
										</div>
										<button type="submit" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>

						</div>
					</div><!--/category-tab-->

                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản phẩm liên quan</h2>
                        @foreach($relatedProduct as $relatedProduct)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/client/images/{{$relatedProduct->productImages[0]->path}}" alt="" />
                                        @if($relatedProduct->discount != null)
                                            <h2>Sale {{$relatedProduct->discount}}</h2>
                                        @else
                                            <h2>{{$relatedProduct->price}}</h2>
                                        @endif
                                        <p>{{$relatedProduct->product_name}}</p>
                                        <a href="products/product/{{$relatedProduct->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
@endsection
