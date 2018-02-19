@extends ('layouts.app')
@section ('content')
<div id='middle-container'>
      <div id='title' class='text-center'>What is life without death?</div>

            <form method="post" action="{{route('subscription.store')}}">
                {{csrf_field()}}
            <div class='row'>
                  <div class='input-group'>

                        <input class="form-control" type="text" placeholder="E-mail " name='email' />

                        <span class='input-group-btn'>
                            <button class='btn btn-secondary'>Be Mortal <!-- Live Life --> </button>

                        </span>
                    </div>
            </div>
          </form>
          @foreach ($errors->all() as $error)
              <div class='text-danger error-msg text-center'>
                  {{$error}}
                  @if ($error == "The email has already been taken.")
                      <a href="{{route('subscription.unsubscribe_link', ['email'=> old('email')] )}}">(Unsubscribe)</a>
                  @endif

              </div>

          @endforeach
    </div>
@endsection
