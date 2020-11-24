@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Envio de Correo de la Seccion</h1>

                    <form action="{{route('correo.store')}}" method="POST">
                        @csrf
                            <label>
                                Nombre:
                                <br>
                                <input type="text" name="name">
                            </label>
                            <br>

                            <label>
                                Correo:
                                <br>
                                <input type="text" name="correo">
                            </label>
                            <br>

                            <label>
                                Mensaje:
                                <br>
                                <textarea name="mensaje" rows="10"></textarea>
                            </label>
                            <br>

                            <button type="submit">Enviar Mensaje</button>
                    </form>

                    @if (session('info'))
                        <script>
                            alert("{{session('info')}}");
                        </script>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
