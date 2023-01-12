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

	@if(session()->has('success'))
			<div class="alert alert-success">{{session()->get('success')}}</div>
		@endif		

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

		<div class="container" style="margin-bottom:-80px;">
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
		</div>
		</div>
		</div>


		

		<hr>

		<!-- ADD COMMENT -->
	

		<div style="margin:25px">

			<form method="post" action="{{ route('add_comment', $article->id) }}"  >
			@csrf
            @method('post')

				<label for="comment" style="color:black">Add a Comment For This Article :</label>

				<div class="form-group">
                  <textarea id="comment" class="form-control" style="width:600px;"
                    placeholder="Write Your Comment Here" name="comment"></textarea>
                </div>

                @if($errors->has('comment'))
                  <p class="text-danger">{{ $errors->first('comment') }}</p>
                @endif

 				<div class="form-group">
                  <input type="submit" value="Create a Comment" class="btn btn-primary py-2 px-4">
                </div>

			</form>

		</div>
		
		<!-- END ADD COMMENT -->


		<!-- comments -->

		<div class="blog-entry ftco-animate" style="padding:35px;color:black">
			COMMENTS

			@if(App\Models\Comment::where('article_id',$article->id)->exists())
			@foreach(App\Models\Comment::where('article_id',$article->id)->get() as $comment)

			<div style="margin: 35px;" >

				<div  style="display: flex;">
					<div >
					<a href="{{route('aboutauther',$comment->user_id)}}">
						<img src="{{asset('storage/' . $comment->users->image)}}" 
						alt="{{ $comment->users->name }} user image"
						 onerror="this.onerror=null;this.src='{{asset('images/default_user_image.png')}}'" 
						 style="width:50px; border-radius: 50%;" >
					</div>
				
					<div style="display:inline; margin-left: 15px;">
						<div style="color:black">{{ $comment->users->name }}</div>
					</a>
						<div>{{ $comment->created_at->format('d-m-y') }}</div>
					</div>
				</div>

				<div>
					<p style="font-weight:lighter">{{ $comment->comment }}</p>
				</div>

    		</div>

			@endforeach
			@else
			
			<p style="padding-top:15px;font-weight:lighter">There Aren't Any Comments For This Article Yet.</p>

			@endif
			@endforeach

		</div>
		<!-- END COMMENTS -->




		@include('layouts.footer')
	</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->



  
@include('style.js')
    
  </body>
</html>