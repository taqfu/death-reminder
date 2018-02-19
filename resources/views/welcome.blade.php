@extends ('layouts.app')
@section ('content')
<div id='middle-container'>
      <div id='welcome-title' class='title text-center'>What is life without death?</div>
      <div id='welcome-about' class='hidden'>
          Death is everpresent. Even now as you're reading this, you could be one
          breath away from a heart attack. Now for some people this thought is
          debilitating. If death is inescapable, what's the point? Why try? Why
          do anything when we're all just ashes and dust in the end?<br><br>
          That's kinda the point.<br><br>
          If that's how you want to be remembered, if that's how you truly want
          people to think of you (as ashes and dust) then do nothing. Be nothing.
          Wait for the inevitable.<br><br>
          But this app is for people who occassionally need to be reminded of what they're working so hard for. So that they'll have a legacy. Anything. Something. When they're gone.<br>
          <div class='text-center title-2'>How does it work?</div>
          Simple. At least once every ninety days, it will send you an email
          reminding you of your mortality. That's it. The message changes
          randomly and it will arrive randomly. Just like death, it will come
          completely randomly.  <br><br>
          We hope that this will inspire you to live the fullest life possible.<br><br>




      </div>
            <form method="post" action="{{route('subscription.store')}}">
                {{csrf_field()}}
            <div class='row'>
                  <div class='input-group'>

                        <input class="form-control" type="text" placeholder="E-mail " name='email' />

                        <span class='input-group-btn'>
                            <button class='btn btn-secondary'>Be Mortal<!-- Live Life --> </button>
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
