@extends('layouts.master')

@section('content')
    <div class="col col-sm-8">
        <h2>
            {{ $product->name }}
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-dark align-right" >editar</a>
        </h2>
       
        <p>
            {{ $product->short }}
        </p>
       {!! $product->body !!}
    </div>
    <div class="col col-sm-4">
        @include('products.fragment.aside')
    </div>
@endsection 