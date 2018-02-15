@extends('layouts.app')

@section('content')
<ul>
@foreach ($reminders as $reminder)
    <li class='reminder'>{{$reminder->body}}</li>
@endforeach
</ul>
<form method="POST" action="{{route('reminder.store')}}">
    <div class='form-group'>
    {{csrf_field()}}
    <textarea name='body' class='form-control'>
    </textarea>
    <input type='submit' class='btn btn-primary btn-lg btn-block'/>
  </div>
</form>

@endsection
