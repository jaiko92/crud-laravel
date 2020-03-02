@extends('layouts.master')

@section('content')
    <div class="col col-ms-8">
        <h2>
            listado de productos
             <a href="{{ route('products.create') }} " class="btn btn-primary pull-right" >Nuevo</a>
        </h2>
        @include('products.fragment.info')
            <table  class="table table-striped">
            <thead>
                <tr>
                <th width="20px">#</th>
                <th>Nombre del producto</th>
                <th colspan="3" >&nbsp;</th>
                </tr>
            </thead>    
            <tb ody>
                @foreach ($data as $item)
                <tr>
                <td>{{ $item->id }}</td>
                <td> <strong>{{ $item->name }}</strong> {{$item->short }}</td>
                <td>
                    <td>
                         <a href="{{ route('products.show', $item->id) }}" class="btn btn-link">Ver</a>
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $item->id) }} "class="btn btn-link">editar</a>
                   </td>
                   <td>
                   <form action="{{ route('products.destroy', $item->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-link">Borar</button>
                  </form>
                    
               </td>
              
                </td>
                </tr>  
                @endforeach
                
            </tbody>
        </table> 
        {{ $data->links() }}
    </div>
    <div class="col col-sm-4">
        <br>
        <br>
        @include('products.fragment.aside')
    </div>
@stop