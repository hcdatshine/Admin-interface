<form action="{{ route('postForm') }}" method="post">
	@csrf
	<input type="text" name="hoTen" placeholder="ho va ten">
	<input type="text" name="mail" placeholder="mail *">
	<input type="submit">
</form>
