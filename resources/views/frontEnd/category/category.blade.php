@extends('frontEnd.master')
@section('title')
{{$category->cat_name}}
@endsection
@section('body')


<section id="mpart">
	<div class="container">
		<div class="row">
			<div id="sidebar" class="col-md-3 filter-sidebar filter-elements">
				<div class="filter-group">
					<div class="filter-item filter_categories ">
						<h4 class="title">All In {{$category->cat_name}}</h4>
						<ul class="subcats">
							<?php
		                     $subcategories=\App\Subcategory::where('cat_id',$category->id)->get();
		                    ?>
							@if(count($subcategories)>0)
								@foreach($subcategories as $subcat)
							<li><a href="{{ route('subcategory.posts',$subcat->slug) }}">{{$subcat->subcat_name}}</a></li>
									@endforeach
								@endif
							
						</ul>					
					</div>
				</div>
				
				<hr class="break30"/>

				<div class="filter-group">
					<div class="filter-item filter_price_range">
						<h4 class="title">Price</h4>
						<form id="formPriceRange" class="filter-cnt clearfix">
							<div class="form-group">
								<label class="control-label">from</label>
								<div class="has-preffix">
									<span class="preffix">৳</span>
									<input type="text" name="price_from" id="price_from" class="form-control" value="">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">to</label>
								<div class="has-preffix">
									<span class="preffix">৳</span>
									<input type="text" name="price_to" id="price_to" class="form-control" value="">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-block">ok</button>
							</div>
						</form>
					</div>
				</div>
				
				<hr class="break30"/>
				
				<div class="topviews">
					<div class="title">Top Views</div>
					<ul>
						<li class="top-item">
							<a href="microlab-m106bt-10w-2-1-multimedia-speaker-with-buletooth.html">
								<div class="image"><img src="{{asset('frontEnd')}}uploads/Microlab%20M106BT_thumb.jpg"></div>
								<div class="name">Microlab M106BT 10W 2....</div>
							</a>			
						</li>
									
								</ul>				
							</div>
				
				<hr class="break30"/>
				
				<div class="adsbox">
									</div>
			</div>
			<div class="col-md-9">
				<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">you are in: <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a href="{{url('/')}}" itemprop="item">
			<span itemprop="name">Home</span>
		</a>
	</li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a href="{{ route('category.posts',$category->slug) }}" itemprop="item">
							<span itemprop="name">{{$category->cat_name}}</span>
						</a>
					</li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<span itemprop="name">All in one PC</span>
			</li></ul>
				
				<div class="productlistpage">
					<div class="sorting well">
						<form id="sortby" class="form-inline pull-left">
							Sort By :
														<select class="span2">
								<option value="default" >Default</option>
								<option value="name_asc" >Name A-Z</option>
								<option value="name_desc" >Name Z-A</option>
								<option value="price_asc" selected>Pirce Low to High</option>
								<option value="price_desc" >Pirce High to Low</option>
								<option value="rating_desc" >Rating High to Low</option>
							</select>
						</form>
						<div class="btn-group pull-right">
							<a class="btn btn-primary btn-compare" href="compare.html">Compare</a>
							<button class="btn" id="list"><i class="fa fa-th-list"></i> </button>
							<button class="btn btn-new" id="grid"><i class="fa fa-th icon-white"></i></button>
						</div>
					</div>
			
					<div id="productgrid">
							<ul class="row">
								<li class="col-sm-3">
									<div class="pro-box">
																				
										<div class="img-box">
											<a href="lenovo-c260-quad-core-all-in-one-pc.html">
												<img src="{{asset('frontEnd')}}/uploads/Lenovo%20C260%20Intel%20Pentium-500x500_thumb.jpg" alt="Lenovo C260 Quad Core All in One PC"/>
											</a>
											<div class="hover-view-action">
												<a href="javascript:void(0)" class="prod_quick_view" data-product_id="545" title="Quick View">
													<i class="fa fa-eye"></i>
												</a>
												<a href="javascript:void(0)" class="add_to_wish_list" data-product_id="545" title="Wishlist">
													<i class="fa fa-heart"></i>
												</a>
												<a href="javascript:void(0)" class="add_to_compare" data-product_id="545" title="Compare">
													<i class="fa fa-signal"></i>
												</a>
											</div>
										</div>
										<div class="info-box">
											<div class="pro-name">
																								
												<a href="lenovo-c260-quad-core-all-in-one-pc.html">Lenovo C260 Quad Core All in One PC</a>
											</div>
											
											<div class="price">৳ 32,000</div>
										</div>
										<div class="action-box">
											<a href="lenovo-c260-quad-core-all-in-one-pc.html">
												View Detail
											</a>
												
											<a href="javascript:void(0)" class="add_to_cart" data-product_id="545" data-product_price="32000" data-product_title="Lenovo C260 Quad Core All in One PC">
													Buy Now
												</a>										</div>
									</div>
								</li>
								
							</ul>
							
							</div>
						<div class="mt40" id="productlist">
							<ul>
								<li>
										<div class="pro-box">
											<div class="img-box">
												<a href="lenovo-c260-quad-core-all-in-one-pc.html">
													<img src="{{asset('frontEnd')}}/uploads/Lenovo%20C260%20Intel%20Pentium-500x500_thumb.jpg" alt="Lenovo C260 Quad Core All in One PC"/>
												</a>
											</div>
											<div class="pro-desc">
												<div class="pro-name"><a href="lenovo-c260-quad-core-all-in-one-pc.html">Lenovo C260 Quad Core All in One PC</a></div>
												
												<div class="clearfix">
													<div class="price">৳ 32,000</div>
													<div class="productdesc">Lenovo C260 Quad Core All in One PC</div>
												</div>
												
												<div class="add-btn-box">
													<a href="javascript:void(0)" class="prod_quick_view" data-product_id="545">
														<i class="fa fa-eye"></i> Quick View
													</a>
													
													<a href="lenovo-c260-quad-core-all-in-one-pc.html">
														<i class="fa fa-eye"></i> View Detail
													</a>
												
													<a href="javascript:void(0)" class="add_to_cart" data-product_id="545" data-product_price="32000" data-product_title="Lenovo C260 Quad Core All in One PC">
															<i class="fa fa-shopping-cart"></i> Buy Now
														</a>													
													<a href="javascript:void(0)" class="add_to_wish_list" data-product_id="545">
														<i class="fa fa-heart"></i> Wishlist
													</a>
													
													<a href="javascript:void(0)" class="add_to_compare" data-product_id="545">
														<i class="fa fa-signal"></i> Compare
													</a>
												</div>
											</div>
										</div>
									</li>
									



							</ul>
						</div>
						
					<div class="mt40 clearfix">
						<ul class="pagination pull-right">
							<li class="active"><a href="#">1</a></li>
							<li class="page"><a href="all-in-one-pc/2.html" data-ci-pagination-page="2">2</a></li>
							<li class="next page"><a href="all-in-one-pc/2.html" data-ci-pagination-page="2" rel="next">Next &rarr;</a></li>
						</ul>								
					</div>				
					</div>
			</div>
		</div>
	</div>
</section>



@endsection


