@extends("layout.index")
@section("content")
    <h1>Mail</h1>
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
    <h2>Hello Admin,</h2>
    You received an email from : {{ $name }}
    Here are the details:
    <b>Name:</b> {{ $name }}
    <b>Email:</b> {{ $email }}
    <b>Phone Number:</b> {{ $phone }}
    <b>Subject:</b> {{ $subject }}
    <b>Message:</b> {{ $messages }}
    <h4>Thank You</h4>

@endsection
