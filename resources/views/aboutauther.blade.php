<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Auther - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
@include('style.css')
  </head>
  <body>

	<div id="colorlib-page">
		

		@include('layouts.navigation')
        
        
        <div id="colorlib-main">
			<div class="hero-wrap js-fullheight" style="background-image: url({{asset('images/bg_1.jpg')}});"
				data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">
                        @foreach($autherarticles as $auther)
                        <div class="img mb-4"><img src="{{asset('storage/' . $auther->users->image)}}" onerror="this.onerror=null;this.src='{{asset('images/default_user_image.png')}}'" class="card-img-top" width="100" style="border-radius: 50%;"></div>
						<div class="desc">
							<h2 class="subheading">Hello I'm</h2>
							<h1 class="mb-4">{{ $auther->users->name }}</h1>
							<p class="mb-4">{{ $auther->users->about_me }}</p>
							<p><a href="about" class="btn-custom">More About Me <span class="ion-ios-arrow-forward"></span></a></p>
                            
						</div>
					</div>
				</div>
			</div>
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center mb-5 pb-2">
						<div class="col-md-7 heading-section text-center ftco-animate">
							<h2 class="mb-4">{{ $auther->users->name }} Articles</h2>
                            @break
                        @endforeach
						</div>
					</div>
					<div class="row">


                    @foreach($autherarticles as $article)
						<div class="col-md-4">
							<div class="blog-entry ftco-animate">
                            <a href="{{route('readmore',$article->id)}}" class="img img-2" style="background-image: url({{asset('storage/' . $article->image)}});"></a>
								<div class="text text-2 pt-2 mt-3">
									<span class="category mb-3 d-block"><a href="{{route('categoryindex',$article->category_id)}}">{{ $article->categories->name }}</a></span>
									<h3 class="mb-4"><a href="{{route('readmore',$article->id)}}">{{ $article->title }}</a></h3>
									<p class="mb-4">{{ $article->article }}</p>
									<div class="author mb-4 d-flex align-items-center">
				            		<div class="ml-3 info">
				            			
				            			<h3><span>Written at</span>: <span>{{ $article->created_at->format('d-m-y') }}</span></h3>
										</div>
									</div>
									<div class="meta-wrap align-items-center">
										<div class="half order-md-last">
											<p class="meta">
												<span><i class="icon-heart"></i>3</span>
												<span><i class="icon-eye"></i>100</span>
												<span><i class="icon-comment"></i>5</span>
											</p>
										</div>
										<div class="half">
											<p><a href="{{route('readmore',$article->id)}}" class="btn py-2">Continue Reading <span class="ion-ios-arrow-forward"></span></a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

                    @endforeach


         <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  
@include('style.js')
    
  </body>
</html>