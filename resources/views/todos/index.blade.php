@extends('app')

@section('content')

    <div class="container w-25 border p-4 mt-4">
        <form action="{{ route('todos')}}" method="POST">
            @csrf

            @if (session('succes'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Titulo de la tarea</label>
                <input type="text" class="form-control" name="title">
            </div>
            <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
        </form>
    </div>
@endsection
