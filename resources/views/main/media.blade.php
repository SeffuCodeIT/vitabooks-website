@extends("layout.index")
@section("content")
    <h1>Media</h1>
    @if(isset($media))
        @foreach($media as $medias)
            <div class="card m-3" style="width: 18rem; display:inline-block;">
                <img src="{{url('/public/media-pics/'.$medias->cover_pic)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{$medias->media_name}}</strong></h5>
                    <p class="card-text">{{Str::limit($medias->media_desc,200)}}.</p>
                    <a href="{{route("singlemedia",$medias->id)}}" class="btn btn-primary">Continue Viewing</a>
                </div>
            </div>
        @endforeach
    @endif

@endsection
