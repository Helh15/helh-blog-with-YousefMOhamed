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
        

     @include('layouts.adminnavigation')

        @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif		


        <div id="colorlib-main">


            <h1>dashboard</h1> 



        </div><!-- END COLORLIB-MAIN -->
        </div><!-- END COLORLIB-PAGE -->




     @include('style.js')
    
  </body>
</html>