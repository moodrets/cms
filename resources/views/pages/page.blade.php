@extends('layouts.site')
@section('content')
<section class="main-section">
    {{-- @if($page->path && $page->path !== '/')
    <x-breadcrumbs :breadcrumbs="$breadcrumbs" :page="$page"></x-breadcrumbs>
    @endif --}}
    {{-- <div class="site-container">
        <h1>{{$page->subtitle}}</h1>
    </div> --}}
    @foreach ($blocks as $block)
    <x-block :block="$block"></x-block>
    @endforeach
</section>
@endsection
