<link href="css/style.css" rel="stylesheet" type="text/css">
@extends('layouts.app')
@section('content')
  <div class="slide-show">
    <img src="/images/kainiikenai.png" /> <!-- スペーサー画像のURL -->
    <img src="/images/kainiikenai.png" /> <!-- 1枚目の画像のURL -->
    <img src="/images/tanomaretabunn.png" /> <!-- 2枚目の画像のURL -->
    <img src="/images/winwin.png" /> <!-- 3枚目の画像のURL -->
  </div>
  
  <div class="parsley-button">
    <a href="/register"><img src="images/touroku.png" width=320 alt="signup" class="img-responsive"></a>
    <a href="/login"><img src="images/roguin.png" width=380 alt="signup" class="img-responsive"></a>
  </div>
@endsection