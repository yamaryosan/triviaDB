@extends('home_mode.app')

@section('content')

<!-- ここにコンテンツを記述 -->

@component('components.search_window')

@endcomponent

@component('components.button')
    @slot('name', 'create')
    @slot('image', 'plus')
    @slot('color', 'blue')
    @slot('link', route('create'))
@endcomponent

@component('components.random')

@endcomponent


<h2>統計情報</h2>

@component('components.import')

@endcomponent

@component('components.button')
    @slot('name', 'export')
    @slot('image', 'download')
    @slot('color', 'green')
    @slot('link', route('exported_files'))
@endcomponent

@component('components.button')
    @slot('name', 'right_fixed')
    @slot('image', 'paper_and_pen')
    @slot('color', 'green')
    @slot('link', route('temp'))
@endcomponent

@component('components.button')
    @slot('name', 'right_fixed')
    @slot('image', 'trashbox')
    @slot('color', 'red')
    @slot('link', route('soft_delete_index'))
@endcomponent

@component('components.button')
    @slot('name', 'all_delete')
    @slot('image', 'trashbox')
    @slot('color', 'red')
    @slot('data_name', 'all-delete')
    @slot('data_value', route('all_delete'))
@endcomponent

@component('components.error_message')

@endcomponent

@component('components.succeed_message')

@endcomponent

<!-- ここまで -->

@endsection
