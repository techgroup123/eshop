<header>
	<div id="hpart">
		<div class="container">
			@foreach($activeTopmails as $activeTopmail)
		    <a href= "mailto:{{$activeTopmail->topmail}}" class="mailto"><span style="color:#FFFFFF;">Email :{{$activeTopmail->topmail}} </span></a> 
		    @endforeach
		   				
			<!-- <div class="top-social-icons">
				<a href="" class="social_yt" target="_blank">
					<img src="">
				</a>
				<a href="" class="social_gp" target="_blank">
					<img src="">
				</a>
				<a href="" class="social_fb" target="_blank">
					<img src="">
				</a>
				<a href="" class="social_tw" target="_blank">
					<img src="">
				</a>
				<a href="" class="social_pn" target="_blank">
					<img src="">
				</a>
			</div> -->

			
			<div class="pull-right">
				<ul class="ac-link clearfix">
					<li><a href="{{asset('/')}}"><i class="fa fa-home"></i> Home</a></li>
			
					<li><a href="account.html"><i class="fa fa-sign-in"></i> Login/Registar</a></li>			
					<li><a href="wishlist.html"><i class="fa fa-heart"></i> Wishlist</a></li>
					<li><a href="compare.html"><i class="fa fa-signal"></i> Compare</a></li>
					<li><a href="find-shop.html"><i class="fa fa-map-marker"></i> Find Shop</a></li>
					<li class="newoffer"><a href="offer.html"><img src="{{asset('frontEnd')}}/images/testnewoffer.gif"></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<section id="hpart1">
		<div class="row">
			<div class="col-sm-3 col-logo">
				<div class="logo">
					<a href="{{asset('/')}}">
						@foreach($activeLogos as $activeLogo)
						<img src="{{asset($activeLogo->logo)}}" alt="Logo">
						@endforeach
					</a>


				</div>
			</div>
			<div class="col-sm-3 col-search">
				<div id="search" class="search">
					<form method="GET" action="https://www.village-bd.com/search">
						<!-- <select id="search_cat" name="cat">
							<option value="">Categories</option>
													</select> -->
						<div class="input-group">
							<input type="search" name="q" id="search_query" class="form-control" value="" placeholder="Keyword Search" autocomplete="off"/>
							<button type="submit">&nbsp;</button>
							<ul class="dropdown-menu"></ul>
						</div>
					</form>
				</div>
			</div>
			<span class="menu-and-cart-group">
				<div class="col-sm-2 col-build-your-pc">
					<a href="javascript:void(0)" class="menutoggle mobile">
						<img src="{{asset('frontEnd')}}/images/menu.png" alt="#">
					</a>
					<a href="pcbuilder.html" class="btn btn-primary">Build Your Own PC</a>
				</div>
				<div class="col-sm-2 col-hotline">
					<div class="hotline">
						<img src="{{asset('frontEnd')}}/images/phone.gif">
						@foreach($activeHotnumbers as $activeHotnumber)
						<span>{{$activeHotnumber->hotnumber}}</span>
						@endforeach
					</div>
				</div>
				<div class="col-sm-1 col-cart">
					<ul class="cart-action">
						<li class="cartitems">
							<a href="javascript:void(0)">
								<i class="fa fa-shopping-cart"></i> 
								<span class="itemcount">
									<span class="itemno">0</span> ITEMS
								</span>
							</a>
						</li>
					</ul>
				</div>
			</span>
			<!-- <div class="hotline mobile" hidden>
				<img src="">
				<span></span>
			</div> -->
		</div>
	</section>
	
	<section id="mainmenu">
		<div class="heading">
			<a href="{{asset('/')}}" class="heading-logo"><img src="{{asset('frontEnd')}}/images/sprit-v1.png"></a>
			<a href="javascript:void(0)" class="heading-close">X</a>
		</div>
		<ul class="navul">

			@foreach($categories as $cat)

				<li class="laptop-notebook dropdown dropdown-submenu">
					<a href="{{ route('category.posts',$cat->slug) }}">
						{{$cat->cat_name}}<span class="{{$cat->mysubcat->isEmpty()==false?'caret':''}} desktop"></span>
					</a>

					@if( ! $cat->mysubcat->isEmpty())
					<ul class="dropdown-menu">
						@foreach($cat->mysubcat as $subcategory)
						<li class="laptop-apple dropdown dropdown-submenu">

					<a href="{{ route('subcategory.posts',$subcategory->slug) }}">
						{{$subcategory->subcat_name}}

						<span class="{{$subcategory->mybrand->isEmpty()==false?'caret':''}} desktop"></span>
					</a>


								@if( ! $subcategory->mybrand->isEmpty())
					<ul class="dropdown-menu">
						@foreach($subcategory->mybrand as $brand)
						<li class="macbook">

					<a href="{{ route('brand.posts',$brand->slug) }}">
						{{$brand->brand_name}}
					</a>
				   </li>
							@endforeach
					</ul>
						@endif







				
						</li>
						@endforeach

					</ul>

					@endif


				</li>
			@endforeach

		</ul>

	</section>
</header>