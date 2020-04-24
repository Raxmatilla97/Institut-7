@extends('layouts.front.sayt-app')


{{-- Frontendda eng yuqori qismdagi Panel fragmenti --}}
@section('fbar-main')
     
     @include('inst.front.pages.fbar-main')

@endsection

{{-- Frontendda eng yuqori qismdagi ingichka fragmenti --}}
@section('top-bar')
     
     @include('inst.front.pages.top-bar')

@endsection

{{-- Frontendda eng yuqori qismdagi menyular fragmenti --}}
@section('main-menyu')
     
     @include('inst.front.pages.main-menyu')

@endsection

{{-- Frontendda yuqori qismdagi slider fragmenti --}}
@section('slider-banner')
     
     @include('inst.front.pages.banner-slider')

@endsection

{{-- Frontendda yuqori qismdagi information fragmenti --}}
@section('start-1')
     
     @include('inst.front.pages.start-1')

@endsection

{{-- Frontendda yuqori qismdagi biz haqimizda fragmenti --}}
@section('about-us')
     
     @include('inst.front.pages.about-us')

@endsection

{{-- Frontendda yuqori qismdagi kurslar yoki articles fragmenti --}}
@section('popular-cource')
     
     @include('inst.front.pages.popular-cource')

@endsection

{{-- Frontendda o'rta qismdagi e'lonlar yoki articles fragmenti --}}
@section('our-events')
     
     @include('inst.front.pages.our-events')

@endsection


{{-- Frontendda o'rta qismdagi ko'pqatorli belgilash fragmenti --}}
@section('whay-choose')
     
     @include('inst.front.pages.whay-choose')

@endsection

{{-- Frontendda o'rta qismdagi iqtidorli talabalar fragmenti --}}
@section('happy-students')
     
     @include('inst.front.pages.happy-students')

@endsection

{{-- Frontendda pastgi qismdagi o'qituvchilar fragmenti --}}
@section('team-tichers')
     
     @include('inst.front.pages.team-tichers')

@endsection

{{-- Frontendda pastgi qismdagi banner fragmenti --}}
@section('admission')
     
     @include('inst.front.pages.admission')

@endsection

{{-- Frontendda eng pastgi qismdagi blog yoki article fragmenti --}}
@section('blog-section')
     
     @include('inst.front.pages.blog-section')

@endsection

{{-- Frontendda eng pastgi qismdagi footer fragmenti --}}
@section('footer')
     
     @include('inst.front.pages.footer')

@endsection