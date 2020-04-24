@extends('layouts.back.sayt-app')

{{-- Backendda eng yuqori qismdagi Panel fragmenti --}}
@section('header-menyu')
     
     @include('inst.back.pages.header-menyu')

@endsection


@section('sidebar-menyu')
     
     @include('inst.back.pages.sidebar-menyu')

@endsection


@section('content')
     
     @include('inst.back.pages.content')

@endsection