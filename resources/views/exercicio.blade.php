@extends('layouts.index')
@section('title', 'Sextou')

@section('content')
    @if($sextou)
        <div style="text-align: center;">
            <h1>SEXTOU GALERA</h1>
            <img src="https://i.ytimg.com/vi/L6qvVscOxLw/hqdefault.jpg">
        </div>
    @else
        <div style="text-align: center;">
            <h1>Ainda não sextou</h1>
            <img src="https://static.poder360.com.br/2019/08/Fabio-Assuncao-868x644.jpg">
        </div>
    @endif
@endsection
