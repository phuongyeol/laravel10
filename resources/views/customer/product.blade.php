@extends('customer.layouts.master')
@section('content')
	<!-- CONTENT section -->
		<div id="pageContent">
			<section class="content offset-top-0">
				<div class="container">
					<div class="row product-info-outer">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
							<div class="row">
								<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 hidden-xs">
									<div class="product-main-image">
										<div class="product-main-image__item">
											@php
											@endphp
											<img class="product-zoom" id="product-zoom" src='{{ asset($product->gallery_products[0]->link) }}' data-zoom-image="{{ asset($product->gallery_products[0]->link) }}" alt="" />
										</div>
										<div class="product-main-image__zoom"></div>
									</div>
									<div class="product-images-carousel">
										<ul id="smallGallery">
											@foreach($product->gallery_products as $image)
												<li>
													<a  href="#" data-image="{{ asset($image->link) }}">
														<img class="gallery" src="{{ asset($image->link) }}" alt="" />
													</a>
												</li>
											@endforeach
										</ul>
									</div>
									<a href="https://assets.adidas.com/videos/w_54,h_54,f_auto,q_auto,fl_lossy/c10a6fec8d004295bfd6a9270086ec65_d98c/POD-S3_1_Shoes_Grey_B37363_video.jpg" class="video-link"><span class="icon icon-videocam"></span>Video</a>
									
								</div>
								<div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
									
									<div class="product-info__title">
										<h2>{{$product->name}}</h2>
									</div>
									
									<div class="visible-xs">
										<div class="clearfix"></div>
										<ul id="mobileGallery">
											@foreach($product->gallery_products as $image)
												<li>
													<a  href="#" data-image="{{ asset($image->link) }}">
														<img class="gallery" src="{{ asset($image->link) }}" alt="" />
													</a>
												</li>
											@endforeach
										</ul>
									</div>
									<div class="price-box product-info__price"><span class="price-box__new">{{number_format($product->price) }}VNĐ</span> <span class="price-box__old">
										@php
											echo number_format($product->price + 5000)  ;
										@endphpVNĐ</span></div>
										
									<div class="product-info__review">
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										{{-- <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>  --}}
									</div>
									<div class="divider divider--xs product-info__divider hidden-xs"></div>
									<div class="product-info__description hidden-xs">
										<div class="product-info__description__brand"><img src="images/custom/brand.png"  alt="" /> </div>
										<div class="product-info__description__text">{!!$product->content!!}</div>
									</div>
									<div class="divider divider--xs product-info__divider"></div>
									<div class="wrapper">
										<div class="pull-left"><span class="option-label">COLOR:</span> *</div>
										<div class="pull-right required">* Required Fields</div>
									</div>
									<ul class="options-swatch options-swatch--color options-swatch--lg">
										@foreach($colors as $color)
											<li class="list-color" style="background: {{$color->code_color}}" colorId= "{{$color->color_id}}"  productId= {{$color->product_id}}></li>
										@endforeach
										
									</ul>
									<div class="wrapper">
										<div class="pull-left"><span class="option-label">SIZE:</span></div>
										<div class="pull-left required">*</div>
									</div>
									<ul class="options-swatch options-swatch--size options-swatch--lg">
										@foreach($sizes as $size)
											<li class="list-size" sizeId= "{{$size->size_id}}"  productId= {{$size->product_id}}>{{$size->name}}</li>
										@endforeach
									</ul>
									<div class="divider divider--sm"></div>
									<div class="wrapper">
										<div class="pull-left"><span class="qty-label">QTY:</span></div>
										<div class="pull-left">											
											<!--  -->
											<div class="number input-counter">
											    <span class="minus-btn"></span>
											    <input type="text" id="qty" value="1" size="5"/>
											    <span class="plus-btn"></span>
											</div>
											<!-- / -->
										</div>
										<div class="pull-left">
											<button type="submit" data-id = "{{$product->id}}" class="btn btn--ys btn--xxl btn-add-cart " disabled="true" ><span class="icon icon-shopping_basket"></span>Add to cart</button>
											
										</div>
									</div>
									<ul class="product-link">
										<a href="{{ route('home') }}"  class="btn btn--ys btn--xxl btn-add-cart " style="background: #35424a;">Shopping Continue</a>
										<li class="text-right"><a href="#"><span class="icon icon-favorite_border  tooltip-link"></span><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><a href="#"><span class="icon icon-sort  tooltip-link"></span><span class="text">Add to compare</span></a></li>
									</ul>									
								</div>	
							</div>
							<div class="content">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
									<li class="active"><a href="#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">DESCRIPTION</a></li>
									<li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Reviews</a></li>
									<li><a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">Tags</a></li>
									<li><a href="#Tab4" role="tab" data-toggle="tab" class="text-uppercase">CUSTOM TAB</a></li>
									<li><a href="#Tab5" role="tab" data-toggle="tab" class="text-uppercase">Sizing Guide</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content tab-content--ys nav-stacked">
									<div role="tabpanel" class="tab-pane active" id="Tab1">
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="divider divider--md"></div>
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"><span class="color">PROOF</span></td>
													<td>PDF Proof</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">SAMPLES</span></td>
													<td>Digital, Printed</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">WRAPPING</span></td>
													<td>Yes,  No</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">UV GLOSS COATING</span></td>
													<td>Yes</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">SHRINK WRAPPING</span></td>
													<td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">WEIGHT</span></td>
													<td>0.05, 0.06, 0.07ess cards</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab2">
										<h5><strong class="color">CUSTOMER REVIEWS 1 ITEM(S)</strong></h5>
										<p> GREAT!</p>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="divider divider--xs"></div>
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"><span class="color">QUALITY</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">PRICE</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">VALUE</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
											</tbody>
										</table>
										<p class="color-light">Review by User / (posted on 16/9/2016)</p>
										<div class="divider divider--xs"></div>
										<h5><strong class="color">WRITE YOUR OWN REVIEW</strong></h5>
										<p><span class="color">YOU'RE REVIEWING:</span>  Lorem ipsum dolor sit amet conse ctetur</p>
										<p><span class="color">HOW DO YOU RATE THIS PRODUCT?</span></p>
										<div class="divider divider--xs"></div>
										<div class="table-responsive">
											<table class="table table-params">
												<tbody>
													<tr>
														<td class="text-right"></td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">QUALITY</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">PRICE</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">VALUE</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="divider divider--xs"></div>
										<form action="#" class="contact-form">
											<label>Nickname<span class="required">*</span></label>
											<input type="text" class="input--ys input--ys--full">
											<label>Summary of Your Review<span class="required">*</span></label>
											<input type="text" class="input--ys input--ys--full">
											<label>Review<span class="required">*</span></label>
											<textarea class="textarea--ys input--ys--full"></textarea>
											<div class="divider divider--xs"></div>
											<button type="submit" class="btn btn--ys text-uppercase">Submit Review</button>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab3">
										<h5><strong class="color">OTHER PEOPLE MARKED THIS PRODUCT WITH THESE TAGS:</strong></h5>
										<p>Pattern (1)</p>
										<div class="divider divider--xs"></div>
										<h5><strong class="color">ADD YOUR TAGS:</strong></h5>
										<form action="#" class="contact-form">
											<input type="text" class="input--ys input--ys--full">
											<p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
											<div class="divider divider--xs"></div>
											<button type="submit" class="btn btn--ys">Add Tags</button>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab4">
										<h5><strong class="color text-uppercase">Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h5>
										<div class="divider divider--xs"></div>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										<ul class="marker-list-circle">
											<li><span class="text-uppercase">Lorem ipsum dolor sit amet</span></li>
											<li><span class="text-uppercase">Conse ctetur adipisicing</span></li>
											<li><span class="text-uppercase">Elit sed do eiusmod tempor</span></li>
											<li><span class="text-uppercase">Incididunt ut laborev</span></li>
											<li><span class="text-uppercase">Et dolore magna aliqua</span></li>
											<li><span class="text-uppercase">Ut enim ad min</span></li>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab5">
										<h5><strong class="color text-uppercase">Clothing - Single Size Conversion (Continued)</strong></h5>
										<div class="divider divider--xs"></div>
										<div class="table-responsive">
											<table class="table table-params">
												<tbody>
													<tr>
														<td class="text-right"><span class="color">UK</span></td>
														<td>
															<ul class="sizes-row">
																<li>18</li>
																<li>20</li>
																<li>22</li>
																<li>24</li>
																<li>26</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">European</span></td>
														<td>
															<ul class="sizes-row">
																<li>46</li>
																<li>48</li>
																<li>50</li>
																<li>52</li>
																<li>54</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">US</span></td>
														<td>
															<ul class="sizes-row">
																<li>14</li>
																<li>16</li>
																<li>18</li>
																<li>20</li>
																<li>22</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">Australia</span></td>
														<td>
															<ul class="sizes-row">
																<li>8</li>
																<li>10</li>
																<li>12</li>
																<li>14</li>
																<li>16</li>
															</ul>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="custom-product-block col-xl-4 visible-xl">
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-redeem"></span></div>
								<div class="delivery-banner__text">
									<h3>SPECIAL OFFER 1+1=3</h3>
									<h5>Get a gift!</h5>
									<p>Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.</p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-card_membership"></span></div>
								<div class="delivery-banner__text">
									<h3>FREE REWARD CARD</h3>
									<h5>Worth 10$, 50$, 100$</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-local_shipping"></span></div>
								<div class="delivery-banner__text">
									<h3>Free Shipping</h3>
									<h5>on orders over $100</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-replay_5"></span></div>
								<div class="delivery-banner__text">
									<h3>Order Return</h3>
									<h5>Returns within 5 days</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="divider-line"></div>
							<h4 class="text-uppercase">Related Products</h4>
							<p>Check items to add to the cart or <a href="#" class="color">select all</a></p>
							<div class="vertical-carousel vertical-carousel-2 with-checkbox offset-top-40">
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox1" value="product1" id="checkBox1"><label for="checkBox1"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-3.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox2" value="product2" id="checkBox2"><label for="checkBox2"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-4.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox3" value="product3" id="checkBox3"><label for="checkBox3"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox4" value="product4" id="checkBox4"><label for="checkBox4"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>			
			<!-- related products -->
			<section class="content">
				<div class="container">
					<!-- title -->
					<div class="title-with-button">
						<div class="carousel-products__center pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
						<h2 class="text-left text-uppercase title-under pull-left">YOU MAY ALSO BE INTERESTED IN THE FOLLOWING PRODUCT(S)</h2>
					</div>
					<!-- /title --> 
					<!-- carousel -->
					<div class="carousel-products row" id="carouselRelated">
						@foreach($products_related as $product_related)
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
							<!-- product -->
							<div class="product">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<a href="{{ route('product.detail', ['slug' => $product_related->slug]) }}""> <img src="{{ asset($product_related->gallery_products[0]->link) }}" alt=""> </a> 
												<!-- quick-view --> 
												<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view" slug="{{$product_related->slug}}"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
												<!-- /quick-view --> 
											</div>
											<!-- /product image --> 
											
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="product.html">{{$product_related->name}}</a></h2>
											</div>
											<!-- /product name --> 
											<!-- product price -->
											<div class="product__inside__price price-box">{{number_format($product_related->price)}}<span class="price-box__old">{{number_format($product_related->price*1.2)}}</span></div>
											<!-- /product price --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													
													<ul class="product__inside__info__link hidden-xs">
														<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
														<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
													</ul>
												</div>
												<!-- /product info --> 
												<!-- product rating -->
												<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<!-- /product rating --> 
											</div>
										</div>
									</div>
							<!-- /product --> 
						</div>
					@endforeach
					</div>
					<!-- /carousel --> 
				</div>
			</section>
			<!-- /related products -->
		</div>
		<!-- End CONTENT section --> 
@endsection