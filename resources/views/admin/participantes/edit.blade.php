@extends('admin.soluciones.create')

@section('edit_titulo') Editar @endsection

@section('edit_nombre',$item->complemento_solucion) 
@section('edit_id',$item->id) 

@section('edit_link') Actualizar @endsection

@section('edit_Method')
    {{ method_field('PUT') }}
@endsection