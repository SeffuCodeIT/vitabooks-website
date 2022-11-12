@extends("layout.index")
@section("content")
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset("assets/images/vitabooks1.jpeg")}}" class="d-block w-100" alt="..."
                     style="height:700px">
            </div>
            <div class="carousel-item">
                <img src="{{asset("assets/images/vitabook2.png")}}" class="d-block w-100" alt="..."
                     style="height:700px">
            </div>
            <div class="carousel-item">
                <img src="{{asset("assets/images/vitabooks3.png")}}" class="d-block w-100" alt="..."
                     style="height:700px">
            </div>
        </div>
    </div>
    <?php
    use App\Models\Blog;
    use App\Models\Projects;
    $project = Projects::all();
    $bookNumber = \App\Models\Books::all();
    $blogNumber = Blog::all();
    $images = \App\Models\Gallery::all();
    //    echo $blogNumber;

    ?>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span>Printed Over</span>
                            <strong class="number"
                                    data-number="{{$bookNumber->count()}}">0</strong>
                            <span>Books In Over 10 years of <existence class=""></existence></span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Donate Money</h3>
                            <p>Help us with financial aid to help us keep doing what we have been doing.</p>
                            <p><a href="/about" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Be a Volunteer</h3>
                            <p>Become a member of Vitabooks, and help us in spreading the message to fight capitalist
                                exploitation.</p>
                            <p><a href="/about" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Make Donation</h3>
                            <p>We can only end capitalist exloitation when we forget our individualist system for a more
                                communal system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Become A Volunteer</h3>
                            <p>Become a member of Vitabooks, and help us in spreading the message to fight capitalist
                                exploitation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Sponsorship</h3>
                            <p>Vitabooks is where it is today due to the effort done by our sponsors, you can always
                                reach out to
                                us if you feel yu would like to support our cause.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--our books section--}}
    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Books</h2>
                    <p>Our books are based on the principles of equality and justice. We aim to redress the working
                        people’s lack of power over
                        information, communication
                        and the media; which then restricts their access to ideas and experiences to resist
                        imperialism..</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">
                        @foreach($bookNumber as $book)
                            <div class="item">
                                <div class="cause-entry">
                                    <a href="#" class="img"><img src="{{url('/book-pics/'.$book->cover_pic)}}"
                                                                 alt="not found" style="height: 265px;"></a>
                                    {{--                                    <a href="#" class="img"--}}
                                    {{--                                       style="background-image: url{{url('/book-pics/'.$book->back_pic)}};"></a>--}}
                                    <div class="text p-3 p-md-4">
                                        <h3><a href="#">{{$book->book_name}}</a></h3>
                                        <p>{{Str::limit($book->book_summary,100)}}</p>
                                        {{--                                        <span class="donation-time mb-3 d-block">Last donation 1w ago</span>--}}
                                        {{--                                        <div class="progress custom-progress-success">--}}
                                        {{--                                            <div class="progress-bar bg-primary" role="progressbar"--}}
                                        {{--                                                 style="width: 28%"--}}
                                        {{--                                                 aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <span class="fund-raised d-block">$12,000 raised of $30,000</span>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--start of gallery--}}
    <section class="ftco-gallery">
        <div class="d-md-flex">
            <a href="{{asset("assets/images/cause-2.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/cause-2.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{asset("assets/images/cause-3.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/cause-3.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{asset("assets/images/cause-4.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/cause-4.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{asset("assets/images/shiraz.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/shiraz.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
        <div class="d-md-flex">
            <a href="{{asset("assets/images/hello.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/hello.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{asset("assets/images/5.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/5.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{asset("assets/images/3.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/3.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{asset("assets/images/cause9.jpg")}}"
               class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
               style="background-image: url({{asset("assets/images/cause9.jpg")}});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
    </section>

    {{--    latest blog section--}}

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent from blog</h2>
                    <p>An independent Kenyan publisher supporting people’s struggles to create societies based on the
                        principles of equality and justice..</p>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($blogNumber as $blogs)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20"
                               style="background-image: url({{('/blog-pics/'.$blogs->cover_pic)}});">
                            </a>
                            <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div><a href="#">{{$blogs->updated_at}}</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <h3 class="heading mt-3"><a href="#">{{$blogs->title}}</a></h3>
                                <p>{{Str::limit($blogs->body,100)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--    projects or events--}}

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Latest Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="carousel-cause owl-carousel">
                    @if(isset($project))
                        @foreach($project as $projects)
                            <div class="item">
                                <div class="cause-entry">
                                    <a href="#" class="img"><img src="{{url('/project-pics/'.$projects->cover_pic)}}"
                                                                 alt="not found" style="height: 265px;"></a>
                                    <div class="text p-3 p-md-4">
                                        <h3><a href="#">{{$projects->project_name}}</a></h3>
                                        <p>Summary:</p>
                                        <p>{{Str::limit($projects->project_short_desc,80)}}</p>
                                        <p>
                                            <button class="btn btn-outline-dark ml-5"><a
                                                    href="{{route("singleprojects",$projects->id)}}"
                                                    style="text-decoration: none;">Continue
                                                    Reading</a></button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>

@endsection
