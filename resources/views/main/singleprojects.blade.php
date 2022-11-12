@extends("layout.index")
@section("content")
    <h1>Kenya & UK Projects</h1>
    @if(isset($singleProjects))
        <section class="cause-contents-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="cause-details-wrapper">
                            <div class="featured-thumb">
                                <img src="{{url('/project-pics/'.$singleProjects->cover_pic)}}" alt=""
                                     style="height: 400px; width: 100%;">
                            </div>
                            <div class="give-form-wrap cause-form-wrap">
                                <div class="cause-meta">
                                    <a href="#" class="cause-cat"><i class="fal fa-heart"></i>Health</a>
                                </div>
                                <h2 class="give-form-title">{{$singleProjects->project_name}}.</h2>
                                <div class="total-bar-counts row align-items-center">
                                    <div class="goal-progress-wrap col-12 col-lg-8 col-md-7">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" role="progressbar"
                                                 style="width:80%"></div>
                                        </div>

                                        <div class="price">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item">Amount Raised</li>
                                                <li class="list-group-item" style="padding-left:650px;">Project
                                                    Cost: {{number_format($singleProjects->project_cost)}}
                                                    Ksh.
                                                </li>
                                            </ul>
                                            <ul>
                                                <li class="list-group-item">Project Started
                                                    on: {{$singleProjects->start_date}}</li>
                                                <li class="list-group-item">Project Ended
                                                    on: {{$singleProjects->end_date}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Problem Statement</h3>
                            <div class="causes-contents">
                                <p>{{$singleProjects->project_short_desc}}</p>
                                <p> . </p>
                                <p>{{$singleProjects->project_body}} </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{url('/project-pics/'.$singleProjects->back_pic)}}"
                                             alt="fundraising">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('/project-pics/'.$singleProjects->back_pic)}}"
                                             alt="fundraising">
                                    </div>
                                </div>

                                <h3>What we Did</h3>
                                <p>{{$singleProjects->project_success}}</p>

                                <ul>
                                    <li>{{$singleProjects->project_pillar}}</li>
                                    <li>{{$singleProjects->project_pillara}}</li>
                                    <li>{{$singleProjects->project_pillarb}}</li>
                                    <li>{{$singleProjects->project_pillarc}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-lg-5 mt-5 mt-lg-0 col-12">
                        <div class="casues-sidebar-wrapper">
                            <div class="single-sidebar-widgets">
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <ul>
                                    <li><a href="#">Charity <span>35</span></a></li>
                                    <li><a href="#">Donation <span>20</span></a></li>
                                    <li><a href="#">Food & Water <span>57</span></a></li>
                                    <li><a href="#">Medical <span>208</span></a></li>
                                    <li><a href="#">Kids in Africa <span>09</span></a></li>
                                </ul>
                            </div>
                            <!-- single-sidebar-widgets -->
                            <div class="single-sidebar-widgets">
                                <div class="widget-title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="causue-gallery-wid">
                                    <a href="{{asset("assetsproj/img/sidebar/g1.jpg")}}"
                                       class="single-cause-img popup-gallery"
                                       style="background-image: url('{{asset("assetsproj/img/sidebar/g1.jpg")}}')"></a>
                                    <a href="assetsproj/img/sidebar/g1.jpg" class="single-cause-img popup-gallery"
                                       style="background-image: url('{{asset("assetsproj/img/sidebar/g1.jpg")}}')"></a>
                                    <a href="assetsproj/img/sidebar/g1.jpg" class="single-cause-img popup-gallery"
                                       style="background-image: url('{{asset("assetsproj/img/sidebar/g1.jpg")}}')"></a>
                                    <a href="assetsproj/img/sidebar/g1.jpg" class="single-cause-img popup-gallery"
                                       style="background-image: url('{{asset("assetsproj/img/sidebar/g1.jpg")}}')"></a>
                                </div>
                            </div>
                            <!-- single-sidebar-widgets -->
                            <div
                                class="sidebar-promo-widgets bg-cover text-white text-center d-flex align-items-center justify-content-center"
                                style="background-image: url('assets/img/home1/cause1.jpg')">
                                <span>Call To Action</span>
                                <h3>There are no secrets to success</h3>
                                <a href="contact.html">Get In Touch</a>
                            </div>
                            <!-- single-sidebar-widgets -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--        @endforeach--}}
    @endif

@endsection
