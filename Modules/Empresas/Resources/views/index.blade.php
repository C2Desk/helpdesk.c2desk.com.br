@extends('layouts/sneat/theme')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h1>Empresas</h1>

    <p>
        This view is loaded from module: {!! config('empresas.name') !!}
    </p>
    <div>
        @foreach($empresas as $empresa)
        <div>
            <span>{{$empresa->razao_social}}</span>
        </div>
        @endforeach
    </div>
</div>
@endsection
