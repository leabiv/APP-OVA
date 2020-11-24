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

                    <h1>Informacion del contenido {{$unidades->nombreUnidad}}</h1>

                    <a href="{{route('unidades.list')}}">Volver al Contenido</a>
                    <a href="{{route('unidades.modify',$unidades)}}">Editar Contenido</a>
                    <br>

                    <p>Descripcion: {{$unidades->descripUnidad}}</p>

                    <iframe width="560" height="315" src="{{$unidades->url_video}}" allowfullscreen></iframe>
                    <p>{{$unidades->url_video}}</p>

                    <form action="{{route('unidades.destroy', $unidades)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar Unidad</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection