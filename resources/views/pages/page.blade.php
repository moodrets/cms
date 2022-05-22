@extends('layouts.site')
@section('content')
<div class="py-20"></div>
<section class="main-section">
    @foreach ($blocks as $block)
    <x-block :block="$block"></x-block>
    @endforeach
</section>
@endsection
