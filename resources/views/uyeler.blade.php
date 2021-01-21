@extends('layouts.master')
@section('title', 'Üyeler')

@section('content')
<div class="container my-5">

    <a type="button" href="{{route('yeniUye')}}" class="btn btn-primary mb-4" >Yeni Üye Kaydı</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr onclick="user({{$user->id}})">
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->gender == 1 ? 'Female' : 'Male'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<script type="text/javascript">
    function user(val) {
        var url = `uye-duzenle/${val}`;
        window.location = url;
    }

</script>
