<?php 
$theme=\DB::table('themes')->where('isdefault','active')->first();
?>
{{-- header comes here --}}
@if($theme)
    @include('themes.'.$theme->slug.'.header')
    @yield('content')
    {{-- footer comes here --}}
    @include('themes.'.$theme->slug.'.footer')
@else
    @include('frontend.starter.header')
    @yield('content')
    {{-- footer comes here --}}
    @include('frontend.starter.footer')
@endif