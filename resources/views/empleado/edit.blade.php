@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ route('empleados.update',$empleado->id) }}" method="post" enctype="multipart/form-data">
        
        @csrf
        {{ method_field('PATCH') }}
        @include('empleado.form', ['modo'=>'Editar'])   

    </form>

</div>

@endsection
