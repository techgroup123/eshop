@extends('frontEnd.master')
@section('title')
bdkoo | Leading retail store for laptop, computer in Bangladesh
@endsection

@section('body')


<!-- slider -->

<section class="banner_slider">
	
	<div id="banner_carousel" class="carousel slide" data-ride="carousel">
		
		<div class="carousel-inner" role="listbox">
			@foreach($activeSliders as $key => $slider)
					<div class="item{{ $key == 0 ? ' active' : '' }}" >
						<a href=""><img src="{{asset($slider->sliderImage)}}" alt="Hp Laptop 25-11-18" width="460" height="345"></a>
					</div>
					@endforeach
					<!-- <div class="item ">
						<a href=""><img src="{{asset('frontEnd')}}/sliders/3.png" alt="Asus 25-11-18" width="460" height="345"></a>
					</div>
					<div class="item ">
						<a href=""><img src="{{asset('frontEnd')}}/sliders/6.jpg" alt="Asus 25-11-18" width="460" height="345"></a>
					</div>
					<div class="item ">
						<a href=""><img src="{{asset('frontEnd')}}/sliders/5.jpg" alt="Asus Motherboard 04-11-18" width="460" height="345"></a>
					</div> -->
					
					
						<ol class="carousel-indicators">
							@foreach($activeSliders as $key => $slider)
							<li data-target="#banner_carousel" data-slide-to="0" class="{{ $key == 0 ? ' active' : '' }}">&nbsp;</li>
							@endforeach
							<!-- <li data-target="#banner_carousel" data-slide-to="1" class="">&nbsp;</li>
							<li data-target="#banner_carousel" data-slide-to="2" class="">&nbsp;</li>
							<li data-target="#banner_carousel" data-slide-to="3" class="">&nbsp;</li> -->
							
					</ol>

		</div>
			
		<a class="left carousel-control" href="#banner_carousel" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#banner_carousel" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</section>


<!-- end slider -->







@endsection

