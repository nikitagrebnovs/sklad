@extends('layout.main')
@section('content')
    <div class="container pt-2">
        @include('objects.object-navbar')
        @include('objects.object-board', $objects)
        @include('objects.objects-list', $objectsList)
    </div>

@endsection
