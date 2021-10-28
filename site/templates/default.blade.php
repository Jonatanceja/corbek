@extends('layouts.default')
@section('content')
<div class="h-16"></div>
@foreach($page->children()->listed() as $part)
@include('blocks.' . $part->intendedTemplate(), ['page' => $part])
@endforeach

@endsection
