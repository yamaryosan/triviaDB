@extends('layouts.app')

@section('title')
<title>新着記事</title>
@endsection

@section('sidebar')
@parent

@component('components_pseudo.sidebar')
@endcomponent
@endsection

@section('content')

<h2>新着記事</h2>

@component('components_pseudo.new_articles')

@endcomponent

@endsection
