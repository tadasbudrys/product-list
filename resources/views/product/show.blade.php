<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{csrf_token()}}">
    <script>window.Laravel = {crfToken:'{{csrf_token()}}'}</script> --}}
</head>
<body>
    @component('layouts.app')
                
    @endcomponent
                {{-- <h5>{!! $product->title !!}</h5> --}}
                
                
              


{{$product->title}}
{{$product->id}}
{{$product->variant}}
 {{-- {{$prductvariant->variant}}  --}}
 <br>
{{var_dump($prductvariant)}}
<div id="app">
    
        <example-component></example-component>
    </div>
<script src="/js/app.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

