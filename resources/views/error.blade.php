@extends ('layouts.app')
@section ('content')
<div id='middle-container'>
    <div id='' class='title text-center text-danger'>Error</div>
    <div class='text-center text'>
        {{$error_message}}
    </div>
</div>
@endsection
