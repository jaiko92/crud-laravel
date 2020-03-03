@extends('layouts.master')

@section('content')
    <div class="col col-sm-8">
        <h2>
         Crear productos
            <a href="{{ route('products.index') }}" class="btn btn-dark align-right" >listado de productos</a>
        </h2>
        @include('products.fragment.error')
        <form action="{{ route('products.store')}}" method="POST">
            @csrf
          
        @include('products.fragment.form')
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <div class="col col-sm-4">
        @include('products.fragment.aside')
    </div>
@endsection 