@extends('layouts.success')

@section('title', 'Checkout Success!')

@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" alt="" />
                <h1>Support Page</h1>
                <p>
                    Found A Trouble? Send us an email at
                </p>
                <p style="color:blue;font-size: 40px;">support@support.com</p>
                <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection
