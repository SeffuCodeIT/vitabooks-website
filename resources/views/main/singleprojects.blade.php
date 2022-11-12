@extends("layout.index")
@section("content")
    <h1>Kenya & UK Projects</h1>
    @if(isset($project))
        @foreach($project as $projects)
            <div class="card" style="width: 18rem;">
                <img src="{{url('/project-pics/'.$projects->cover_pic)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$projects->project_name}}</h5>
                    <p class="card-text">{{$projects->project_short_desc}}.</p>
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>
        @endforeach
    @endif

@endsection
