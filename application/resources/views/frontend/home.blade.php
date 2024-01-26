@extends('layouts.FrontendLayout')
@section('content')
<?php 
$theme=\DB::table('themes')->where('isdefault','active')->first(); 
?>
{{-- Body Content Goes Here --}}
@if($theme)
    @include('themes.'.$theme->slug.'.body')
@else
    @include('frontend.starter.body')
@endif
@endsection