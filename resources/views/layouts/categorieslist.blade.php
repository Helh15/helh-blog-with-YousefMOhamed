       
       @foreach(App\Models\Category::get() as $cat)
            <li><a href="{{route('categoryindex',$cat->id)}}">{{ $cat->name }}<span>(6)</span></a></li>
        @endforeach