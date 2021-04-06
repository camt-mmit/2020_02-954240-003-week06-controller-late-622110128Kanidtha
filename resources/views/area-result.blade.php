@extends('layouts.main')

@section('title', 'Area Result')

@section('content')
<div class="center">
    <p>
        <b>Type </b><a class = "color ">::</a> {{ $type }}<br />
        <b>Width </b><a class = "color ">::</a> {{ $width }}<br />
        <b>Height</b><a class = "color ">::</a> {{ $height }}<br />
        <b>Area </b><a class = "color ">::</a> {{ $area }}<br />
    </p>
</div>
@endsection