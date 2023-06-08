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
                        <img src="{{url('/public/blog-pics/'.$blog->cover_pic)}}" alt=""
                             style="width:70%; height:400px; margin-left:260px;" class=""><br>
                        {{--                        <article>{{Str::words( $blog->body, 120)}}</article>--}}
                        <p>{{$blog->body}}</p>
                        <h4>Comments:</h4>
                        @foreach($comments as $comment)
                            @if($comment->post_id == $blog->id  )
                                <div class="display-comment" @if($comment->parent_id != null)
                                    style="margin-left:140px;"
                            @endif

                            <strong>{{ $comment->user->name }}:</strong>
                            <p>{{ $comment->body }}</p>
                            {{--                                @if($comment->parent_id != null)--}}
                            {{--                                    <div class="display-comment" style="margin-left:40px;">--}}
                            {{--                                        <strong>{{ $comment->user->name }}:</strong>--}}
                            {{--                                        <p>{{ $comment->body }}</p>--}}
                            {{--                                    </div>--}}
                            {{--                                @endif--}}

                            <a href="" id="reply"></a>
                            <form method="post" action="{{ route('comments.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="body" class="form-control"/>
                                    <input type="hidden" name="post_id" value="{{ $comment->post_id }}"/>
                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}"/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Reply"/>
                                </div>
                                <hr/>
                            </form>

                            <hr/>
                            @include('post.commentsDisplay', ['comments' => $blog->comments, 'post_id' => $blog->id])
                            @endif
                    </div>
                    @endforeach

                    <hr/>
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $blog->id }}"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        </div>
    @endif
@endsection
