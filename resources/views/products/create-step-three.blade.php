@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header"><h2>Rellena la prueba</h2></div>

                    <div class="card-body">


                        {{$product->textoIni}}

                    <hr>
                    <textarea class="form-control" rows="13" style="min-width: 100%" id="textoRedaccion" name="textoRedaccion"></textarea>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-4 text-left">
                                <a href="#" class="btn btn-danger pull-right">Tiempo <span id="countdown" class="timer"></span></a>

                            </div>
                            <script>
                               var seconds = 7200;
                               function secondPassed() {
                               var minutes = Math.round((seconds - 30)/60);
                               var remainingSeconds = seconds % 60;
                               if (remainingSeconds < 10) {
                                  remainingSeconds = "0" + remainingSeconds;
                               }
                               document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
                               if (seconds == 0) {
                                clearInterval(countdownTimer);
                                document.getElementById('countdown').innerHTML = "Buzz Buzz";
                               } else {
                                seconds--;
                               }
                               }
                               var countdownTimer = setInterval('secondPassed()', 1000);
                            </script>
                            <div class="col-md-4 text-right">
                                <button type="submit" class="btn btn-primary" disabled>Repetir</button>
                            </div>
                            <div class="col-md-4 text-right">
                                <button type="submit" class="btn btn-primary">Enviar Texto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
