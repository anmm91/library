@if(Auth::check())
<div class="card">
    <div class="card-header">Categories</div>
    <div class="card-body">



        @if(count($categories))
            <ul class="list-group">
                @foreach($categories as $category)
                    <li><a href="{{route('category',$category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        @endif
    </div>

</div>
@endif
