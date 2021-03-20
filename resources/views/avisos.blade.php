@extends ('layouyts.externo')
@section('title', 'Quadro de Avisos')
@section('sidebar')
    @parent
    <p>^^ Barra superior adicionada ao layout pai/m&atilde;e ^^</p>
@endsection
@section('content')
    <p>Quadro de Avisos</p>
    <br><br>
    <p>Olá {{$nome}}! Veja os avisos de hoje:</p>

    @if($mostrar)
        @foreach($avisos as $aviso)
            <p>Aviso #{{$aviso['id']}}: {{$aviso['texto']}}</p>
        @endforeach
    @else
        <p>Nenhum aviso para hoje</p>
    @endif
@endsection