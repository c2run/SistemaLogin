<a href="/">Inicio</a>
@guest
<a href="/login">login</a>
@else
<a href="/dashboard">dashboard</a>
<a href="/#">logout</a>
@endguest
@if(session('status'))
<br>
{{session('status')}}
@endif