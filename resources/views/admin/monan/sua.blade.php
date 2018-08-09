@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món Ăn
                    <small>{{$monan->nameMonAn}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $loi)
                            {{$loi}}<br>
                        @endforeach
                    </div>
                @endif

                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="admin/monan/sua/{{$monan->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên Món Ăn</label>
                        <input class="form-control" name="nameMonAn" value="{{$monan->nameMonAn}}" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" value="{{$monan->price}}" />
                    </div>
                    <div class="form-group">
                        <label>Review Món Ăn</label>
                        <input class="form-control" name="reviewMonAn" value="{{$monan->reviewMonAn}}" />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection