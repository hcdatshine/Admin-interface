<h1>Nhập điểm</h1>
<form action="{{route('dacodiem')}}" method="POST">
	@csrf
	<input type="text" name="diem">
	<input type="submit">
</form>