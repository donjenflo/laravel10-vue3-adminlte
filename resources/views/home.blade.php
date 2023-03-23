@extends('layouts.app')

@section('content')
<div class="wrapper" id="app_vue"></div>
@endsection

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
