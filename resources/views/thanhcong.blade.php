@if(Auth::check())
	<div><h1>Đăng nhập thành công</h1></div>
{{-- 	@if(isset($user)) --}}
		<div> {{"Tên : ".Auth::user()->name}}</div>
		<br>
		<div>{{"Email : ".Auth::user()->email}}</div>
		<br>
		<div><a href="{{ route('logout') }}">Logout</a></div>
{{-- 	@endif --}}
@else
	<div><h1>Bạn chưa đăng nhập</h1></div>
@endif