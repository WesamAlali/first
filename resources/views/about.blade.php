@extends('layout.master')


@section('title', 'About Page')


@section('content')
    This hello from about page
@endsection


@section('sidebar')
    @parent
    <li>third</li>
</ul>
@endsection