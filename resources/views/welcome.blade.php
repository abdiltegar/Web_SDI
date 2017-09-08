@extends('template/t_welcome')
@section('pageTitle', 'Welcome Page')
@section('content')


<section class="animsition">
  <div class="col-sm-12" style="overflow-x:hidden;">
  <!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="http://www.freshdesignweb.com" target="_blank">Home</a>
                <span class="right">
                    <a href="http://www.freshdesignweb.com/responsive-menu-css3-tutorial.html">
                        <strong>Back to the freshdesignweb Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span>Tutorials</span> Demo Fashion Responsive Slider Tutorial</h1>
            </header>
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Bodycon Dresses</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
    </div>
  </div>
</section>

@endsection
