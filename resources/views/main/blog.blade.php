@extends("layout.index")
@section("content")
    <h1>Blog</h1>
    <div class="container">
        <div class="row">
            @if(isset($posts))
                @foreach($posts as $blog)
                    <div class="col-12 text-center pt-5">
                        <h1 class="display-one mt-5">{{$blog->title}}</h1>
                        <p>{{$blog->body}}</p>
                        <br>
                        <a href="/blog/{{ $blog->id }}" class="btn btn-outline-primary">Show Blog</a>
                        @if($user == $blog->user_id)
                            <a href="/blog/{{ $blog->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                            <br><br>
                            <form id="delete-frm" class="" action="" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete Post</button>
                            </form>

                        @endif
                    </div><br>
                @endforeach
            @endif
        </div>
    </div>

@endsection
