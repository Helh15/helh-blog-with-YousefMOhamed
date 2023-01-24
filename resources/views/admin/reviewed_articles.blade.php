<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ADMIN - Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	@include('style.css')

   <style>

       a i {
        transition: all 0.2s linear;
        }

        a:hover i {
        transform: scale(1.5);
        }

        .T:hover {
          color:rgb(200, 227, 75);
        }

        .F:hover {
          color: rgb(255, 221, 0);
        }


    </style>

  </head>
  <body  style="background-color: #f4f4f48b">
	

  <div id="colorlib-page" >
      

    @include('layouts.adminnavigation')

      @if(session()->has('success'))
          <div class="alert alert-success">{{session()->get('success')}}</div>
      @endif		


        <div id="colorlib-main">

            <div class="d-flex m-5">

                <div class="flex-grow-1">
                <h4  style="font-weight:bold" >
                  Reviewed Articles
                  </h4> 
                </div>

                <div class="align-self-center">
                    <a href="{{route('admin_login')}}" class="px-1">
                    Un Reviewed Articles
                    </a>
                    
                    <a href="{{route('disliked_articles')}}" class="px-1">
                      Disliked Articles
                    </a>
                </div>

         </div>
          

          <div class="container" style="max-width:900px">


              <table class="table table-hover table-light" style="font-size:12px">

                  <thead style="background-color:rgb(200, 227, 75)">

                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Auther Name</th>
                      <th scope="col">Article Title</th>
                      <th scope="col">The Article</th>
                      <th scope="col">Category</th>
                      <th colspan="2"></th>
                    </tr>

                  </thead>

                  <tbody>

                     @foreach(App\Models\Article::where('state','1')->get() as $article)

                    <tr >
                      <th >
                        <a href="{{route('aboutauther',$article->user_id)}}">
                        <img src="{{asset('storage/' . $article->users->image)}}" 
                        alt="{{ $article->users->name }} user image"
                          onerror="this.onerror=null;this.src='{{asset('images/default_user_image.png')}}'" 
                          style="width:50px; border-radius: 50%;" >
                      </th>
                      <td class="align-middle">{{ $article->users->name }}</td>
                      <td class="align-middle">{{ $article->title }}</td>
                      <td class="align-middle">{{ $article->article }}</td>
                      <td class="align-middle">{{ $article->categories->name }}</td>

                      <td colspan="2"  class="align-middle">
                        <!-- <a href="{{route('liked_article',$article->id)}}" class="px-1 T"  >
                        <i class="fa-regular fa-circle-check fa-2xl"></i>
                        </a> -->

                        <a href="{{route('disliked',$article->id)}}" class="px-1 F">
                        <i class="fa-regular fa-circle-xmark fa-2xl"></i>
                        </a>
                     </td>
                     
                    </tr>

                  @endforeach

                  </tbody>

               </table>
          
          </div>
          
            


          
        


      </div><!-- END COLORLIB-MAIN -->

  </div><!-- END COLORLIB-PAGE -->




     @include('style.js')
    
  </body>
</html>