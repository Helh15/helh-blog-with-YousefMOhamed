<div class="hero-wrap js-fullheight" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="js-fullheight d-flex justify-content-center align-items-center">
        <div class="col-md-8 text text-center">
            
            @auth
            <div class="img mb-4"><img src="{{asset('storage/' . Auth::user()->image )}}" onerror="this.onerror=null;this.src='images/default_user_image.png';" class="card-img-top" width="100" style="border-radius: 50%;"></div>
            <div class="desc">
                <h2 class="subheading">Hello I'm</h2>
                <h1 class="mb-4">{{ Auth::user()->name }}</h1>
                <p class="mb-4">{{ Auth::user()->about_me }}</p>
                <p><a href="about" class="btn-custom">More About Me<span class="ion-ios-arrow-forward"></span></a></p>

            <div class="form-group">
               <a href="about">
               <button type="submit"  class="btn btn-primary py-2 px-4">New Article</button>
               </a> 
            </div>

            @else
            <div class="img mb-4" style="background-image: url(images/author.jpg);"></div>
          	<div class="desc">
                <h2 class="subheading">Hello I'm</h2>
                <h1 class="mb-4">Elen Henderson</h1>
                <p class="mb-4">I am A Blogger Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="about" class="btn-custom">More About Me<span class="ion-ios-arrow-forward"></span></a></p>
            @endauth    
            </div>
        </div>
    </div>
</div>