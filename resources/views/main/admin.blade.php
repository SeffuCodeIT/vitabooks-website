@extends("layout.index")
@section("content")
    <h1>Admin Page</h1>
    {{--    start of adding new books--}}
    <h1>Add New book</h1>

    <div class="row" style="background-color: #737373;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
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
            <h1 class="text-info text-center">Add New book</h1>
            {!! Form::open(['method'=>'POST', 'action'=>'\App\Http\Controllers\BooksController@store','files'=>true]) !!}
            {{csrf_field()}}
            <input required class="form-control" name="book_name" placeholder="Enter Book Title" type="text"><br>
            <input required class="form-control" name="book_summary" placeholder="Enter Book Summary" type="text"><br>
            <input required class="form-control" name="author_name" placeholder="Author Name" type="text"><br>
            <input class="form-control" name="s_author_name" placeholder="Second Author Name" type="text"><br>
            <label for="print_date">Date Of Release</label>
            <input required class="form-control" name="print_date" type="date"><br>
            <input required class="form-control" name="book_price" placeholder="Enter Book Price" type="number"><br>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_pic',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Back Picture:') !!}
                {!! Form::file('back_pic',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <div class="form-group">
                    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>
        <div class="col-md-3"></div>
    </div>
    {{--    end of adding new books--}}

    {{--    start of Add New Magazine--}}
    <h1>Add New Magazine</h1>

    <div class="row" style="background-color: #737373;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
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
            <h1 class="text-info text-center">Add New Kenyan Socialist Magazine</h1>
            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{url('store')}}">

                {{csrf_field()}}
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Magazine Name"><br>
                            <input type="text" name="short_desc" class="form-control"
                                   placeholder="Short Description 20 words max"><br>
                            <label for="file">Choose Magazine File</label>
                            <input type="file" name="file" placeholder="Choose file" id="file"><br>
                            <label for="front_pic">Choose Picture</label>
                            <input type="file" name="front_pic" placeholder="Choose Picture" id="front_pic">

                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-3"></div>
    </div>
    {{--    end of Add New Magazine--}}

    {{--    start of Add New blog--}}

    <h1>Add New Blog</h1>

    <div class="row" style="background-color: #737373;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
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
            <h1 class="text-info text-center">Add New Blog</h1>
            <form method="POST" enctype="multipart/form-data" id="upload-file"
                  action="storeBlog">

                {{csrf_field()}}
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Blog Title"><br>
                            <input type="text" name="body" class="form-control"
                                   placeholder="Body"><br>
                            <label for="cover_pic">Choose Picture</label>
                            <input type="file" name="cover_pic" placeholder="Choose Picture" id="cover_pic">
                            <input type="hidden" name="user_id" value="{{$user_id}}">

                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-3"></div>
    </div>
    {{--    end of Add New blog--}}

@endsection
