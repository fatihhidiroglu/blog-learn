@extends('layouts.master')
@section('title', 'Yeni Üye Kaydı')

@section('content')
<div class="container my-5">
    <h3>Yeni Üye Kaydı</h3>

    <form action="{{route('yeniUyePost')}}" method="post" class="col-md-8 col-lg-6">
      @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ad Soyad</label>
            <input type="text" class="form-control" name='name'>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email adresi</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name='email'>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Yaş</label>
            <input type="text" class="form-control" name='age'>
        </div>
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Cinsiyet</label>
            <select class="form-select" id="inputGroupSelect01" name="gender">
              <option value="1">Kadın</option>
              <option value="2">Erkek</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
    </form>
</div>
@endsection
