

		@foreach(App\Models\Article::get() as $article)
	<div class="col-md-4">
			<div class="blog-entry ftco-animate">
					<a href="{{route('readmore',$article->id)}}" class="img img-2" style="background-image: url({{'storage/' . $article->image}});"></a>
					<div class="text text-2 pt-2 mt-3">

					@foreach($article->categories()->get() as $category)
						<span class="category mb-3 d-block"><a href="{{route('categoryindex',$category->id)}}">{{ $category->name }}</a></span>
					@endforeach

			<h3 class="mb-4"><a href="{{route('readmore',$article->id)}}">{{$article->title}}</a></h3>
			<p class="mb-4">{{$article->article}}</p>
			<div class="author mb-4 d-flex align-items-center">

				@foreach($article->users()->get() as $auther)

				<a href="{{route('aboutauther',$auther->id)}}" class="img"><img src="{{asset('storage/' . $auther->image )}}" onerror="this.onerror=null;this.src='images/default_user_image.png';" class="card-img-top" width="100" style="border-radius: 50%;"></a>
				<div class="ml-3 info">
					<span>Written by</span>
					<h3>
					<a href="{{route('aboutauther',$auther->id)}}">{{ $auther->name }}</a>
				@endforeach

						, <span>{{$article->created_at->format('y-m-d')}}</span>
					</h3>
				</div>
			</div>
			<div class="meta-wrap align-items-center">
			<div class="half order-md-last">
				<p class="meta">
					<span><i class="icon-heart"></i>3</span>
					<span><i class="icon-eye"></i>100</span>
					<span><i class="icon-comment"></i>
				{{ App\Models\Comment::where('article_id',$article->id)->count() }}
					</span>
				</p>
			</div>
			<div class="half">
				<p><a href="{{route('readmore',$article->id)}}" class="btn py-2">Continue Reading <span class="ion-ios-arrow-forward"></span></a></p>
			</div>
			</div>
		</div>
				</div>
		</div>
		@endforeach