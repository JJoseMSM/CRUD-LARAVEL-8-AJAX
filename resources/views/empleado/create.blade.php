@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ route('empleado.store') }}" method="post" enctype="multipart/form-data">
        @csrf <!-- Token de seguridad -->

        @include('empleado.form', ['modo'=>'Crear'])

    </form>

</div>

@endsection