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

                    <h1>Listado de Unidad</h1>
                    
                    <div>
                        <ul>
                            @foreach ($unidades as $unidad)
                                <li>
                                    <a href="{{route('unidades.information', $unidad->id)}}">{{$unidad->nombreUnidad}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection