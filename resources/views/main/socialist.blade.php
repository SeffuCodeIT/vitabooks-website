@extends("layout.index")
@section("content")
    <h1 class="pt-3" style="text-align:center;">The Kenyan Socialist Magazine</h1>
    <div class="row">
        <div class="row justify-content-center mb-2 pb-1">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Newest Releases</h2>
            </div>
        </div>
        <div class="col-md-12 ftco-animate">
            <div class="carousel-cause owl-carousel">
                @if(isset($magazine))
                    @foreach($magazine as $magazines)
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"><img src="{{url('/public/mag-pics/'.$magazines->frontPic)}}"
                                                             alt="not found" style="height: 265px;"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">{{$magazines->name}}</a></h3>
                                    <p>Summary:</p>
                                    <p>{{$magazines->short_desc."..."}}</p>
                                    <p>
                                        <button class="btn btn-outline-dark ml-5"><a
                                                href="{{route("read",$magazines->id)}}" style="text-decoration: none;">Continue
                                                Reading</a></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <div class="container">
                <h1 style="text-align:center;">About The Kenyan Socialist Magazine</h1>
                <p style="text-align:center;">
                    In its first two years or so, it published a number of book and started the free on-line journal,
                    The
                    Kenya
                    Socialist. It is among the organisations that set up Ukombozi Library, and has been working closely
                    with
                    the Library. it conducts events such as book launches and other forums to sensitise communities on
                    social
                    and political issues which are also the subject matter of its publications.
                </p><br>
                <p style="text-align:center;"> As a publisher working
                    with
                    a
                    library, we connect with a number of community groups whose libraries we helped by donating titles
                    published
                    by VitaBooks.
                    The subject areas that Vita Books publishes in are influenced very much by the political and
                    information
                    needs of working people in Kenya. As a neo-colony, Kenya has continued the imperialist-imposed
                    practice
                    of
                    ‘TINA’ (There Is No Alternative – to capitalism and imperialism).
                </p><br>
                <p style="text-align:center;">This has affected political as
                    well as
                    information struggles in Kenya, as it has in other countries in a similar situation. That is why
                    Vita
                    Books
                    focuses on areas that are obvious ‘vacuum areas’ created by the ruling elites. One such area is
                    socialism as
                    an alternative to capitalism. In this sense Vita Books has unashamedly taken sides with the
                    struggles of
                    working people and seeks to expose the oppression and exploitation inherent in the current Political
                    and
                    economic set-up.
                    That forms the content of what Vita Books publishes.</p><br>
            </div>
        </div>

    </div>
    @if(isset($magazineFile))
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    {{--                <div class="container">--}}
                    <iframe src="/public/magazines/{{$magazineFile->file}}" height="1000" width="1000"></iframe>
                    {{--                </div>--}}
                </div>
            </div>
        </div>

    @endif

@endsection
