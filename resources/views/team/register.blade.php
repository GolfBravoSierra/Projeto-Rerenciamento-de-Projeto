@extends('components.layout')

@section('content')
    <div class="container">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="w-50">
                <h2 class="text-center mb-4">Criação de Times</h2>
                <form action="/teams/register" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="pb-1">Nome do Time</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <input type="submit" class="btn btn-primary btn-block" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection