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

                    <h1>Modificar de la Seccion</h1>

                    <form action="{{route('unidades.update', $unidad)}}" method="POST">
                
                        @csrf
                        @method('put')
                
                        <label for="">
                            Nombre Unidad
                            <br>
                            <input type="text" name="nombreUnidad" value="{{old('nombreUnidad', $unidad->nombreUnidad)}}">
                        </label>
                
                        <br>
                        <label for="">
                            Descripcion Unidad
                            <br>
                            <textarea name="descripUnidad" rows="10" >{{old('nombreUnidad', $unidad->descripUnidad)}}</textarea>
                        </label>
                
                        <br>
                        <label for="">
                            Url Video
                            <br>
                            <input type="text" name="url_video" value="{{old('nombreUnidad', $unidad->url_video)}}">
                        </label>
                        <br>
                
                        <label for="">
                            Tema
                            <br>
                            <input type="number" name="id_Tema" value="{{old('nombreUnidad', $unidad->id_Tema)}}">
                        </label>
                        <br>
                
                        <button type="submit">Actualizar Unidad</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection