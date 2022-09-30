@extends("layout.index")
@section("content")
    <h1>Blog</h1>
    @if(isset($blog))
        <div class="header">
            <h2>Blog Name</h2>
            <h2>{{$blog->title}}</h2>

        </div>

        <div class="container">
            <div class="row">
                <div class="leftcolumn">
                    <div class="card">
                        {{--                    <h5>Title description, Dec 7, 2017</h5>--}}
                        <img src="{{url('/blog-pics/'.$blog->cover_pic)}}" alt=""
                             style="width:70%; height:400px; margin-left:260px;" class=""><br>
                        {{--                        <article>{{Str::words( $blog->body, 120)}}</article>--}}
                        <p>{{$blog->body}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
