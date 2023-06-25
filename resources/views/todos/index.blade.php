@extends('app')

@section('content')

    <div class="container w-25 border p-4 mt-4">
        <form>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Titulo de la tarea</label>
                <input type="text" class="form-control" name="title">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
