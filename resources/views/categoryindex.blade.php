<!DOCTYPE html>
<html lang="en">

<head>
	<title>Elen - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	@include('style.css')

</head>

<body>

	<div id="colorlib-page">

		@include('layouts.navigation')

		<div id="colorlib-main">
			
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center mb-5 pb-2">
						<div class="col-md-7 heading-section text-center ftco-animate">
							<h2 class="mb-4">Articles</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
								paradisematic country.</p>
						</div>
					</div>
					<div class="row">

					
                      @foreach($categoryarticles as $article)
					  
						<div class="col-md-4">
							<div class="blog-entry ftco-animate">
							<a href="{{route('readmore',$article->id)}}" class="img img-2" style="background-image: url({{asset('storage/' . $article->image)}});"></a>
								<div class="text text-2 pt-2 mt-3">
									<span class="category mb-3 d-block"><a href="#">{{ $article->categories->name }}</a></span>
									<h3 class="mb-4"><a href="{{route('readmore',$article->id)}}">{{ $article->title }}</a></h3>
									<p class="mb-4">{{ $article->article }}</p>
									<div class="author mb-4 d-flex align-items-center">
									<a href="{{route('aboutauther',$article->user_id)}}" class="img"><img src="{{asset('storage/' . $article->users->image)}}" onerror="this.onerror=null;this.src='{{asset('images/default_user_image.png')}}'" class="card-img-top" width="100" style="border-radius: 50%;"></a>
				            		<div class="ml-3 info">
				            			<span>Written by</span>
				            			<h3><a href="{{route('aboutauther',$article->user_id)}}">{{ $article->users->name }}</a>, <span>{{ $article->created_at->format('d-m-y') }}</span></h3>
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

						
					</div>
				</div>
			</section>
			<footer class="ftco-footer ftco-bg-dark ftco-section">
				<div class="container px-md-5">
					<div class="row mb-5">
						<div class="col-md">
							<div class="ftco-footer-widget mb-4 ml-md-4">
								<h2 class="ftco-heading-2">Category</h2>
								<ul class="list-unstyled categories">
								@include('layouts.categorieslist')

								</ul>
							</div>
						</div>
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Archives</h2>
								<ul class="list-unstyled categories">
									<li><a href="#">October 2018 <span>(6)</span></a></li>
									<li><a href="#">September 2018 <span>(6)</span></a></li>
									<li><a href="#">August 2018 <span>(8)</span></a></li>
									<li><a href="#">July 2018 <span>(2)</span></a></li>
									<li><a href="#">June 2018 <span>(7)</span></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Have a Questions?</h2>
								<div class="block-23 mb-3">
									<ul>
										<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
												Francisco, California, USA</span></li>
										<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a>
										</li>
										<li><a href="#"><span class="icon icon-envelope"></span><span
													class="text">info@yourdomain.com</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
								with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
									target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


		@include('style.js')

</body>

</html>
