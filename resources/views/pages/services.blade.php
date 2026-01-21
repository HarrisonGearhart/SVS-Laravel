{{--extends the html layout in views/layouts/app.blade.php to this
seciton--}}
@extends('layouts.app')

{{-- Wrap content in @section and @endsection --}}
@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
    <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    </ul>
    @endif
@endsection
