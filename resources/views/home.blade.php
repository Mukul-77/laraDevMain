<h1>Home page</h1>

{{ URL::current() }}

<br>

{{ URL::full() }}

<br>

{{ url()->current() }}

<a href="{{ route('about') }}">Go to about page</a>
$name="Klaus";
<a href="{{ route('about',['Klaus']) }}">About Name</a>