@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header"><h2>Información</h2></div>

                    <div class="card-body">

                      <p>  El siguiente ejercicio consiste en crear la letra de una canción breve.</p>
                      <p> Cuando comiences, aparecerá un texto en el que una persona expresa sus ideas, recuerdos y
                        sentimientos. Tendrás 2 horas para escribir una letra, teniendo en cuenta:</p>
                        <ul>
                        <li> Que la rima sea siempre AABB</li><li>
                         Que los versos no excedan de 13 sílabas</li><li>
                         Que ha de tener dos estrofas de cuatro versos y un estribillo de otros cuatro</li><li>
                         Que toda unidad de significado (nombres, fechas, ideas expresadas, sentimientos…) que
                        aparezca en el texto ha de verse reflejada en la letra</li><li>
                         Que han de incluirse al menos dos figuras retóricas</li>
                        </ul>
                        Se valorará mucho el cuidado de la prosodia, o rítmica de la escritura.

                    </div>
                    <div class="card-footer">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Siguiente</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
