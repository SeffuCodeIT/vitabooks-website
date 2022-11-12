@extends("layout.index")
@section("content")
    <h1>Kenya & UK Projects</h1>
    @if(isset($project))
        @foreach($project as $projects)
            <div class="card m-3" style="width: 18rem; display:inline-block;">
                <img src="{{url('/project-pics/'.$projects->cover_pic)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{$projects->project_name}}</strong></h5>
                    <p class="card-text">{{Str::limit($projects->project_short_desc,300)}}.</p>
                    <a href="{{route("singleprojects",$projects->id)}}" class="btn btn-primary">Read More</a>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example"
                             style="width: 75%; height: 29%" aria-valuenow="75" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <div class="price">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item">Amount Raised</li>
                            <li class="list-group-item">{{number_format($projects->project_cost) }} Ksh.</li>
                        </ul>
                    </div>

                </div>
            </div>
        @endforeach
    @endif

@endsection
