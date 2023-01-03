<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Explorer - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
@include('style.css')
  </head>
  <body>

	<div id="colorlib-page">
		

		@include('layouts.navigation')
        
         <!-- معلومات الكاتب وليس المستخدم -->
  @foreach($articles as $article)

		<div id="colorlib-main">
			<div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">

         <div class="img mb-4"><img src="{{asset('storage/' . $article->users->image)}}" onerror="this.onerror=null;this.src='{{asset('images/default_user_image.png')}}'" class="card-img-top" width="100" style="border-radius: 50%;"></div>
						<div class="desc">
							<h2 class="subheading">Hello I'm</h2>
							<h1 class="mb-4">{{ $article->users->name }}</h1>
							<p class="mb-4">{{ $article->users->about_me }}</p>

							<ul class="ftco-social mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
						</div>
					</div>
				</div>
			</div>

      <div class="container">
	    		<div class="row">
	    			<div class="col-lg-11">
	    				<div class="row">
              <div class="col-md-12">
              <div class="blog-entry ftco-animate" style="margin-left:50px;">
	    							<div  class="img" style="background-image: url({{asset('storage/' . $article->image)}}); margin-top:20px"></div>
	    							<div class="text pt-2 mt-3">
					          	<span class="category mb-1 d-block"><a href="{{route('categoryindex',$article->category_id)}}">{{ $article->categories->name }}</a></span>
				              <h3 class="mb-4"><a href="#">{{ $article->title }}</a></h3>
				              <p class="mb-4">{{ $article->article }}</p>
				              <div class="author mb-4 d-flex align-items-center">
                      <a href="{{route('aboutauther',$article->user_id)}}" class="img"><img src="{{asset('storage/' . $article->users->image)}}" onerror="this.onerror=null;this.src='{{asset('images/default_user_image.png')}}'" class="card-img-top" width="100" style="border-radius: 50%;"></a>
				            		<div class="ml-3 info">
				            			<span>Written by</span>
				            			<h3><a href="{{route('aboutauther',$article->user_id)}}">{{ $article->users->name }}</a>, <span>{{ $article->created_at->format('d-m-y') }}</span></h3>
				            		</div>
				            	</div>
				              <div class="meta-wrap d-md-flex align-items-center">
				              	<div class="half order-md-last text-md-right">
					              	<p class="meta">
					              		<span><i class="icon-heart"></i>3</span>
					              		<span><i class="icon-eye"></i>100</span>
					              		<span><i class="icon-comment"></i>5</span>
					              	</p>
				              	</div>
				              	
				              </div>
              </div>
            </div>
          </div>
        </div>

     
        @endforeach

 <?php /*@include('layouts.footer')*/ ?>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  
@include('style.js')
    
  </body>
</html>