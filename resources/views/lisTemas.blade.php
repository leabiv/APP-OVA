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

                    <h1>Listado de Temas</h1>
                    
                    <div>
                        <ul>

                            @foreach ($listUnidad as $unidad) 
                                <li><a href="{{route('unidades.information', $unidad->id)}}">{{$unidad->nombreUnidad}}</a></li>
                                @foreach ($listTemas as $temas)
                                    @if ($unidad->id_Tema == $temas->num_unidad)
                                        <li type="circle"><a href="{{route('temas.information', $temas->id)}}">{{$temas->nombre_Tema}}</a></li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection