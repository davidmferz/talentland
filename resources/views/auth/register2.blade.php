@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registro</h1>
        <form>
            @foreach ($formData as $input)
                <div class="form-group mb-2">
                    <label for="{{ $input['nombre'] }}">{{ $input['nombre'] }}</label>
                    <input type="{{ $input['tipo'] }}" id="{{ $input['nombre'] }}" name="{{ $input['nombre'] }}" class="{{ $input['class'] }}">
                </div>
            @endforeach
        </form>
        <br>
        {{ $formData->links() }}
    </div>
@endsection
