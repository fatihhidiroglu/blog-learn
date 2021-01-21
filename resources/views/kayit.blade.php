@extends('layouts.master')
@section('title', 'Kayıt Ol')

@section('content')
  <div class="container ">
    @foreach ($errors->all() as $error)
      <div class="p-1 mb-2 bg-warning text-dark">
        {{$error}}
      </div>
    @endforeach
    <form method="post" action="{{route('kayit.post')}}">
      @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Ad Soyad</label>
            <input type="text" name='ad' class="form-control" value="{{old('ad')}}" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kullanıcı Adı</label>
            <input type="text" name='kullanici_adi' class="form-control" value="{{old('kullanici_adi')}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email adresi</label>
            <input type="email" name='email' class="form-control" value="{{old('email')}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Şifre</label>
            <input type="password" name='sifre' class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input type="password" name='sifre_confirmation' class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>

  </div>
@endsection
