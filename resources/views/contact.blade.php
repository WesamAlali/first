@extends('layout.master')

@section('title')
    Contact Me
@endsection

@section('content')
    <div class="container">
        <h1>{{ $page_name }}</h1>
        <p>{{ $page_description }}</p>
    </div>
@endsection

@section('sidebar')
    @parent
    <li>third</li>
</ul>
@endsection
