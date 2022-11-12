@extends("layout.index")
@section("content")
    <h1>Admin Page</h1>
    {{--    start of orders--}}
    <h1>Orders</h1>
    <div style="padding: 50px; text-align: center;">
        <table>
            <tr style="background-color: #e0a800">
                <td style="padding: 10px; font-size: 20px;">Name</td>
                <td style="padding: 10px; font-size: 20px;">Phone</td>
                <td style="padding: 10px; font-size: 20px;">Address</td>
                <td style="padding: 10px; font-size: 20px;">Product Name</td>
                <td style="padding: 10px; font-size: 20px;">Quantity</td>
                <td style="padding: 10px; font-size: 20px;">Price</td>
                <td style="padding: 10px; font-size: 20px;">Status</td>
            </tr>


            @if(isset($orders))
                @foreach($orders as $orders)
                    <tr style="background-color: #000000">
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$orders->name}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$orders->phone}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$orders->address}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$orders->product_name}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$orders->quantity}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$orders->price}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$orders->status}}</td>
                    </tr>
                @endforeach

            @endif

        </table>

    </div>

    {{--    end of orders--}}
    {{--    start of emails--}}
    <h2>Emails</h2>
    <div style="padding: 50px; text-align: center;">
        <table>
            <tr style="background-color: #e0a800">
                <td style="padding: 10px; font-size: 20px;">Sender Name</td>
                <td style="padding: 10px; font-size: 20px;">Email</td>
                <td style="padding: 10px; font-size: 20px;">Phone</td>
                <td style="padding: 10px; font-size: 20px;">Subject</td>
                <td style="padding: 10px; font-size: 20px;">Messages</td>
            </tr>


            @if(isset($contact))
                @foreach($contact as $contacts)
                    <tr style="background-color: #000000">
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$contacts->name}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$contacts->email}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$contacts->phone}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$contacts->subject}}</td>
                        <td style="padding: 10px; font-size: 20px; color: #f0f0f0; font-weight: bold">
                            {{$contacts->messages}}</td>
                    </tr>
                @endforeach

            @endif

        </table>

    </div>

    {{--    end of emails--}}
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
    {{--    start of Add New projects--}}
    <h1>Add New projects</h1>

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
            <h1 class="text-info text-center">Add New projects</h1>
            {!! Form::open(['method'=>'POST', 'action'=>'\App\Http\Controllers\ProjectsController@store','files'=>true]) !!}
            {{csrf_field()}}
            <input required class="form-control" name="project_name" placeholder="Enter Project Title" type="text"><br>
            <input required class="form-control" name="project_body" placeholder="Enter Project First Paragraph"
                   type="text"><br>
            <input required class="form-control" name="project_short_desc" placeholder="Project Second Paragraph"
                   type="text"><br>
            <input required class="form-control" name="project_success" placeholder="Project What You Did"
                   type="text"><br>
            {{--                project pillars--}}
            <p>Enter Project Pillars/Missions/Visions</p>
            <input required class="form-control" name="project_pillar" placeholder="Project First Pillar"
                   type="text"><br>
            <input required class="form-control" name="project_pillara" placeholder="Project Second Pillar"
                   type="text"><br>
            <input required class="form-control" name="project_pillarb" placeholder="Project Third Pillar"
                   type="text"><br>
            <input required class="form-control" name="project_pillarc" placeholder="Project Fourth Pillar"
                   type="text"><br>

            {{--            <input class="form-control" name="s_author_name" placeholder="Second Author Name" type="text"><br>--}}
            <label for="start_date">Project Start Date</label>
            <input required class="form-control" name="start_date" type="date"><br>
            <label for="end_date">Project End Date</label>
            <input required class="form-control" name="end_date" type="date"><br>
            <input required class="form-control" name="project_cost" placeholder="Enter Project Cost" type="number"><br>
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
    {{--    end of adding new projects--}}
    {{--    start of Add New Media--}}
    <h1>Add New Media</h1>

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
            <h1 class="text-info text-center">Add New media</h1>
            {!! Form::open(['method'=>'POST', 'action'=>'\App\Http\Controllers\MediaController@store','files'=>true]) !!}
            {{csrf_field()}}
            <input required class="form-control" name="media_name" placeholder="Enter Media Title" type="text"><br>
            <input required class="form-control" name="media_desc" placeholder="Enter Short Desc Of The File"
                   type="text"><br>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_pic',null,['class'=>'form-control']) !!}
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
    {{--    end of adding new media--}}
    {{--    start of Add Gallery--}}
    <h1>Add New Gallery</h1>

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
            <h1 class="text-info text-center">Add New Gallery</h1>
            {!! Form::open(['method'=>'POST', 'action'=>'\App\Http\Controllers\GalleryController@store','files'=>true]) !!}
            {{csrf_field()}}
            <input required class="form-control" name="album_name" placeholder="Enter Album Name" type="text"><br>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_pic',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_pica',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_picb',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_picc',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_picd',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_pice',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_picf',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_picg',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_pich',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Choose Cover Picture:') !!}
                {!! Form::file('cover_pici',null,['class'=>'form-control']) !!}
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
    {{--    end of adding new media--}}

@endsection
