@extends('layouts.master')
<h1>View welcome</h1>
<form action="{!! route('postForm') !!}" method="post">
	{{ csrf_field() }} 
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" name="name">
	<input type="submit">
</form>