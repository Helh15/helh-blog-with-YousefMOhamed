<a class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
			<h1 id="colorlib-logo"><a href="/">{{ Auth::user()->name }}<span>.</span></a></h1>
					<li class="colorlib-active"><a href="{{route('home')}}">BLOG Home</a></li>
					<li><a href="{{route('logout')}}">Logout</a></li>
					
					<li><a href="{{route('admin_login')}}">Dashboard</a></li>


					
				</ul>
			</nav>

		</aside> 
		<!-- END COLORLIB-ASIDE -->