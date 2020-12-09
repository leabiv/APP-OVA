@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Informacion del Contenido Tematico{{$tema->nombre_Tema}}</h1>

                    <a href="{{route('temas.list')}}">Volver al Contenido</a>
                    <br>

                    <p>Descripcion: {{$tema->descripcion_Tema}}</p>

                    <iframe width="560" height="315" src={{$tema->url_video}} allowfullscreen></iframe>
                    <p>{{$tema->url_video}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection