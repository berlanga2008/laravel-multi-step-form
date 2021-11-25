@include('common.head')
@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.one.post') }}" method="POST">
                @csrf

                <div class="card">
                    <div class="card-header"><h2>Introduce tus datos</h2></div>

                    <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">

                                <input type="text" value="{{ $product->nombre ?? '' }}" class="form-control" id="nombre"  name="nombre" placeholder="Nombre"/>
                            </div>
                            <div class="form-group">

                                <input type="email"  value="{{{ $product->email ?? '' }}}" class="form-control" id="email" name="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">

                                <input type="text"  value="{{{ $product->telefono ?? '' }}}" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"/>
                            </div>
                            <div class="form-group">

                                <input type="text"  value="{{{ $product->pais ?? '' }}}" class="form-control" id="pais" name="pais" placeholder="Pais"/>
                            </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Ir a la prueba de letrista</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
