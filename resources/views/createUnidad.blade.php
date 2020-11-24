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

                    <h1>Creacion de la Unidad</h1>
                    <form action="{{route('unidades.store')}}" method="POST">

                        @csrf
                
                        <label for="">
                            Nombre Unidad
                            <br>
                            <input type="text" name="nombreUnidad" value="{{old('nombreUnidad')}}">
                        </label>
                        @error('nombreUnidad')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                
                        <br>
                        <label for="">
                            Descripcion Unidad
                            <br>
                            <textarea name="descripUnidad" rows="10">{{old('descripUnidad')}}</textarea>
                        </label>
                        @error('descripUnidad')
                        <br>
                        <small>{{$message}}</small>
                        <br>
                        @enderror
                
                        <br>
                        <label for="">
                            Url Video
                            <br>
                            <input type="text" name="url_video" value="{{old('url_video')}}">
                        </label>
                        @error('url_video')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <br>
                
                        <label for="">
                            Tema
                            <br>
                            <input type="number" name="id_Tema" value="{{old('id_Tema')}}">
                        </label>
                        @error('id_Tema')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <br>
                        <button type="submit">Enviar unidad</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection