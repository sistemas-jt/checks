@extends('checks.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar Nuevo Checklist</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('checks.index') }}"> Volver</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ups!</strong> Hay problemas con el ingreso.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('checks.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cliente:</strong>
                <input type="text" name="customer_name" class="form-control" placeholder="Cliente">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Razón Social:</strong>
               <input type="text" name="customer_business_name" class="form-control" placeholder="Razón Social">
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vendedor:</strong>
               <input type="text" name="salesman" class="form-control" placeholder="Vendedor">
            </div>
        </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condición de Venta:</strong>
               <input type="text" name="sale_condition" class="form-control" placeholder="Condición de Venta">
            </div>
        </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Condición de Pago:</strong>
               <input type="text" name="payment_condition" class="form-control" placeholder="Condición de Pago">
            </div>
        </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Entrega:</strong>
               <input type="date" name="delivery_date" class="form-control" placeholder="Fecha de Entrega">
            </div>
        </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dirección de Entrega:</strong>
               <input type="text" name="delivery_address" class="form-control" placeholder="Dirección de Entrega">
            </div>
          </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </div>
   
</form>
@endsection