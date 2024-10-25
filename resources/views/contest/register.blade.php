@extends('components.layout')

@section('content')
    <div class="container">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="w-50">
                <h2 class="text-center mb-4">Criação de Campeonatos</h2>
                <form action="/contest/register" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Nome do Campeonato</label>
                        <input type="text" id="title" class="form-control" name="title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="mode">Modo</label>
                        <input type="text" id="mode" class="form-control" name="mode">
                    </div>
                    <div class="form-group mb-3">
                        <label for="begin_date">Data de Inicio</label>
                        <input class="form-control" type="datetime-local" id="begin_date" name="begin_date"   value="2018-06-12T19:30" min="2024-21-08T00:00" max="2040-01-01T00:00"  />
                    </div>
                    <div class="form-group mb-3">
                        <label for="end_date">Data de Termino</label>
                        <input class="form-control" type="datetime-local" id="end_date" name="end_date" value="2018-07-22" min="2018-01-01" />
                    </div>  
                    <div class="form-group mb-3">
                        <label for="description">Descrição do Campeonato</label>
                        <textarea class="form-control" id="description" name="description" rows="4" cols="50"></textarea>
                    </div> 
                    <input type="submit" class="btn btn-primary btn-block" value="Registrar">
                </form>
            </div>
        </div>
    </div>
@endsection