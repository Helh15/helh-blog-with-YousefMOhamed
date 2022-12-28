<a class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
			@if(Route::has('login'))
					@auth
			<h1 id="colorlib-logo"><a href="/">{{ Auth::user()->name }}<span>.</span></a></h1>
					<li class="colorlib-active"><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('logout')}}">Logout</a></li>
					@else
					<li><a href="login">Login</a></li>
					@if(Route::has('register'))
					<li><a href="register">Register</a></li>
					@endif
					@endauth
					@endif

					<li><a href="photography">Photography</a></li>
					<li><a href="travel">Travel</a></li>
					<li><a href="fashion">Fashion</a></li>
					<li><a href="about">About</a></li>
					<li><a href="contact">Contact</a></li>
					
				</ul>
			</nav>

		</aside> 
		<!-- END COLORLIB-ASIDE -->