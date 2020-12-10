@extends('layouts.mainBase')

@section('sub-title','Dashboard')

@section('content')

    <div class="main-wrapper">
        @include('includes.dashboard-sideBar')

        <div class="page-wrapper">

            <div class="container">
            @if($user->status == $student)
                @include('viewAssets.medicalProgressBar')
            @elseif($user->status == $staff)
                @include('viewAssets.medicalcount')
            @elseif($user->status == $admin)
                @include('viewAssets.AdminMedicalCount')
            @endif
            </div>

            <div class="container">
                <div class="row mt-5">
                @if($user->status == $student)
                    @include('viewAssets.medicalSchedules')
                @endif
                @if($user->status == $staff)
                    @include('viewAssets.medicalRecords')
                @endif
                </div>
            </div>

            @if($user->status == $admin)
            <div class="col-1g-12 col-sm-12">
                <div class="content">
                        @include('viewAssets.adminCMS')
                </div>
            </div>
            @endif
        </div>
        </div>

@endsection
