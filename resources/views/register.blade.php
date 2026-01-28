@extends('layouts.app')

@section('content')
    <main class="main login-page">
        <!-- Start of Page Header -->
        <div class="page-header">
            <div class="container">
                <h1 class="page-title mb-0" style="color: #0f1535 !important;">Register</h1>
            </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb" style="color: #0f1535 !important;">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->
        <div class="page-content">
            <div class="container" style="color: #0f1535 !important;">
                @include('login.signUp')
            </div>
        </div>
    </main>
@endsection
