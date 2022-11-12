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
                        <h4>Comments:</h4>
                        @foreach($comments as $comment)
                            @if($comment->post_id == $blog->id)

                                <strong>{{ $comment->user->name }}:</strong>
                                <p>{{ $comment->body }}</p>
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
                        @endforeach

                        {{--                        <h4>Add comment</h4>--}}
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
