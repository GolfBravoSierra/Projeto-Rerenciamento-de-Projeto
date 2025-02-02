@extends('components.layout')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="w-50">
            <h2 class="text-center mb-4">Login de Usuário</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    @error('email')
                        <small class="error">**{{ $message }}**</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @error('password')
                        <small class="error">**{{ $message }}**</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </form>
            <a href="/forgot-password" style="text-decoration: none; color:gray;">Esqueci minha Senha</a>
        </div>
    </div>
@endsection