@extends('admin.layouts.app')
@section('title', 'CONTENT-CATEGORY')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sub Category
                    <small style="font-size:50%;">Thêm</small>
                </h1>
                <hr>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
              @if(count($errors)>0)
                <div class="alert alert-danger" role="alert">
                  @foreach($errors->all() as $key)
                      {{$key}}<br>
                  @endforeach
                </div>
              @endif
              @if(Session::get('thongbao'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('thongbao')}}
                </div>
              @endif
                <form action="{{route('sub-content-category.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="name"  id="title" placeholder="Nhập tên thể loại" required min="3"/>
                        <label>Alias</label>
                        <input class="form-control" name="alias"  id="alias" required min="3" placeholder="Alias sẽ hiện ở đây" />
                        <label>Chọn category</label>
                        <select class="form-control" name="id_category">
                            @foreach($data_category as $key)
                            <option value="{{$key->id}}">{{$key->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@if(Session::get('thongbao'))
<div class="alert alert-danger" style="top: -10px;" role="alert">
  {{Session::get('thongbao')}}
</div>
@endif
@push('scripts')
<script src="{{ asset('js/alias.js') }}"></script>
@endpush
@endsection
