@extends("layout.index")
@section("content")
    <h1>Catalogue</h1>
    <h1>Books we have in our Catalogue</h1>
    @if(isset($books))
        @foreach($books as $book)
            <div class="card bg-info m-1" style="max-width: 540px; text-align:center; display:inline-block;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{url('/book-pics/'.$book->cover_pic)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    <p>{{session('success')}}</p>
                                </div>
                            @endif

                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    <p>{{session('error')}}</p>
                                </div>
                            @endif
                            <h5 class="card-title"><strong>Title: {{$book->book_name}}</strong></h5>
                            <p class="card-text">Summary:</p><br>
                            <p class="card-text">{{$book->book_summary}}</p>
                            <p class="card-text"><small class="text-muted">Authored
                                    by: {{$book->author_name. " and ". $book->s_author_name}}</small></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Released On: {{$book->print_date}}</li>
                                <li class="list-group-item">Price: {{$book->book_price}} Ksh.</li>
                            </ul>
                            <div class="card-body">
                                {{--                                <a href="{{route("getBook",$book->id)}}" class="card-link">--}}
                                {{--                                    <button class="btn btn-success">Get a Copy</button>--}}
                                {{--                                </a>--}}
                                <form action="{{url('addCart',$book->id)}}" method="POST">
                                    @csrf
                                    <input type="number" value="1" min="1" class="form-control"
                                           style="width:100px;" name="quantity"><br>
                                    <input class="btn btn-primary" type="submit" value="Add To Cart">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @endif

@endsection
