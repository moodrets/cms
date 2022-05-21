@extends('layouts.site')
@section('content')
<section class="main-section">
    @foreach ($blocks as $block)
    <x-block :block="$block"></x-block>
    @endforeach
</section>
@endsection
