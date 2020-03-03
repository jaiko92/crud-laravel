@extends('layouts.master')

@section('content')
    <div class="col col-sm-8">
        <h2>
         Crear productos
            <a href="{{ route('products.index') }}" class="btn btn-dark align-right" >listado de productos</a>
        </h2>
        @include('products.fragment.error')

        <form action="{{ route('products.update',$product->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="name">name</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="enter">
            </div>

            <div class="form-group">
                <label for="short">short</label>
                <input type="text" class="form-control" name="short" value="{{ $product->short }}" placeholder="enter">
            </div>

            <div class="form-group">
                <label for="body">body</label>
                <textarea name="body"  class="form-control" value="" cols="20" rows="5">{{$product->body }}</textarea>
            </div>
                  
             <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <div class="col col-sm-4">
        @include('products.fragment.aside')
    </div>
@endsection 