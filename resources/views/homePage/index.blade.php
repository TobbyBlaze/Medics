@extends('layouts.mainBase')

@section('sub-title','HomePage')

@section('content')
    <div class="main-content">
        @foreach($posts as $post)
        @include('viewAssets.homeBanner')
        @include('viewAssets.homeFeatures')
        @include('viewAssets.meet-doctors')
        @include('viewAssets.homeDepartments')
        @include('viewAssets.homeTestimonials')
        @endforeach
    </div>
@endsection
