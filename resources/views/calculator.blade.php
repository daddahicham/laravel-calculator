@extends('layouts.main')
@section('content')
  
    <form method="POST" action="{{ route('calculate') }}"> 
         @if ($errors->any())
        <div class="alert error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @csrf

        <label for="number1">Nombre 1 :</label>
        <input type="number" name="number1" value="{{ old('number1') }}" required>

        <label for="operation">Opération :</label>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Soustraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>

        <label for="number2">Nombre 2 :</label>
        <input type="number" name="number2" value="{{ old('number2') }}" required>

        <button type="submit">Calculer</button>
    </form>


@endsection
