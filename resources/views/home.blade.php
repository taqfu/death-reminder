@extends('layouts.app')

@section('content')
@foreach ($reminders as $reminder)
<div> {{$reminder}}</div>
@endforeach
@endsection
