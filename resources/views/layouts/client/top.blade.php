@php
	$invalidatingCacheStr = "";
    if(config("app.env") == 'local') $invalidatingCacheStr = "?ver=".date('YmdHis'); //개발서버용
    if(config("app.env") == 'production') $invalidatingCacheStr = "?ver=202001212"; //운영서버용d
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="title" content="farmnjobs" />
<meta name="format-detection" content="telephone=no" />
<title>Client @yield('title')</title>
<!-- 공통폰트 -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- 공통스타일 -->
{{-- <script src="/css/app.css{{$invalidatingCacheStr}}"></script> --}}
{{-- <script src="/css/common.css{{$invalidatingCacheStr}}"></script> --}}
<link type="text/css" href="{{ asset('css/common.css') }}" rel="stylesheet">

<!-- 공통스크립트 -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
<script src="{{ asset('js/common.js') }}" defer></script>
{{-- <script src="js/app.js{{$invalidatingCacheStr}}"></script>
<script src="js/common.js{{$invalidatingCacheStr}}"></script> --}}
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script> --}}
</head>
