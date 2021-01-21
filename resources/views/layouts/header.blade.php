<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Site denemesi')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style type="text/css">
      html, body {
        display: block;
        width: 100%;
        margin: 0
      }
      .content {
        height: 100%;
        margin: 3rem 2rem;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('anasayfa')}}">FH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{Request::path() == route('anasayfa') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('anasayfa')}}">{{__('header.anasayfa')}}</a>
                </li>
                <li class="nav-item {{Request::path() == route('uyeler') ? 'active' : ''}}">
                    <a class="nav-link " href="{{route('uyeler')}}">{{__('header.uyeler')}}</a>
                </li>
                <li class="nav-item {{Request::path() == route('kayit') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('kayit')}}">{{__('header.kayitol')}}</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <select class="custom-select" name="dil">
                  <option @if (App::isLocale('tr')) selected @endif>{{__('header.tr')}}</option>
                  <option @if (App::isLocale('en')) selected @endif>{{__('header.en')}}</option>
                </select>
                <input class="form-control mr-sm-2" type="search" placeholder="{{__('header.arama')}}" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{__('header.arama')}}</button>
            </form>
        </div>
    </nav>
