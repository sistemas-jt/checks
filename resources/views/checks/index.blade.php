@extends('checks.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CheckList de Ventas - Dto. Sistemas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('checks.create') }}"> Crear CheckList</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Cliente</th>
            <th>Vendedor</th>
            <th width="280px">Acción</th>
        </tr>
        @foreach ($checks as $check)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $check->customer_name }}</td>
            <td>{{ $check->salesman }}</td>
            <td>
                <form action="{{ route('checks.destroy',$check->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('checks.show',$check->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('checks.edit',$check->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $checks->links() !!}
      
@endsection