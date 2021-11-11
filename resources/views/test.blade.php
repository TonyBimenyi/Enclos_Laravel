@if (Auth::user())
@include('layaouts.app')
@else
<a href="{{ view('auth.login') }}"></a>
@endif

