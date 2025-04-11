@extends('base')
@section('title', env('APP_NAME'))
@section('content')
    <main id="mainIndex">
        <img id="img" src="/asset/images/flag.jpg" alt="Our flag" width=150px height=150px>
        <h1 id="Title">Hello From Madagascar</h1>
        <p>It's currently {{date('h:i A')}} </p>
    </main>
@endsection
