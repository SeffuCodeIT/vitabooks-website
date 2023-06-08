@extends("layout.index")
@section("content")
    <h1>Media</h1>
    @if(isset($singleMedia))
        <div class="header">
            <h2>{{$singleMedia->media_name}}</h2>
            <div class="container">
                <div class="row">
                    <div class="leftcolumn">
                        <div class="card">
                            {{--                    <h5>Title description, Dec 7, 2017</h5>--}}
                            <iframe src="" frameborder="0"></iframe>
                            <img src="{{url('/public/media-pics/'.$singleMedia->cover_pic)}}" alt=""
                                 style="width:70%; height:400px; margin-left:260px;" class=""><br>
                            {{--                        <article>{{Str::words( $blog->body, 120)}}</article>--}}


                        </div>
                    </div>
                </div>
            </div>
            <iframe src="" frameborder="0"></iframe>
            <p>{{$singleMedia->media_desc}}</p>

        </div>

    @endif
@endsection
