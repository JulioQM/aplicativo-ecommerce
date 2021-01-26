<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Snippet - BBBootstrap</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <style>body {
                background-color: #eeeeee
            }

            .green {
                color: rgb(15, 207, 143);
                font-weight: 680
            }

            @media(max-width:567px) {
                .mobile {
                    padding-top: 40px
                }
            }</style>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript'></script>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
        <div class="container rounded bg-white">
            <div class="row d-flex justify-content-center pb-5">
                <div class="col-sm-5 col-md-5 ml-1">
                    <div class="py-4 d-flex flex-row">
                        <h5><span class="fa fa-check-square-o"></span><b>COZA</b> STORE | </h5><span class="pl-2">Pago</span>
                    </div>
                    <div class="py-4 d-flex flex-row">
                        <h4 >ID:</h4><h4 class="green"> &nbsp 85</h4>
                    </div>

                    <h4>DETALLE DEL PEDIDO</h4>
                    <div class="d-flex pt-2">
                        <div>
                            <p><b>Fecha del pedido.</b></p>
                        </div>

                    </div>
                    <p>Su orden sera registrada con la siguiente fecha: </p>
                    <div class="rounded bg-light d-flex">
                        <div class="p-2">
                            <script>
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </div>
                        <div class="ml-auto p-2">Pendiente confirmación</div>
                    </div>
                    <hr>
                    <div class="pt-2">
                        <div class="d-flex">
                            <div>
                                <p><b>Metodo de pago.</b></p>
                            </div>
                            <div class="ml-auto p-2">
                                <a href="metodopago.html" class="text-primary"><i class="fa fa-plus-circle text-primary"></i>Ingresar metodo de pago </a>
                            </div>
                        </div>
                        <p> Este es un estimado valor de su compra (no cubre el interes generado por el credito directo, ni el interes de la tarjeta ni tampoco el valor de la transferencia) El valor final sera entregado una vez confirme la compra. </p>
                        <form class="pb-3">

                        </form>
                        <form class="pb-3">

                        </form>
                        <div> <input type="button" value="Proceder con el pago" class="btn btn-primary btn-block"> </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 offset-md-1 mobile">
                    <div class="py-4 d-flex justify-content-end">
                        <h6><a href="#">Cancelar compra y regresar al carrito</a></h6>
                    </div>
                    <div class="bg-light rounded d-flex flex-column">
                        <div class="p-2 ml-3">
                            <h4>Detalle de la orden</h4>
                        </div>
                        <div class="p-2 d-flex">
                            <div class="col-8">Total productos</div>
                            <div class="ml-auto">$186.76</div>
                        </div>
                        <div class="p-2 d-flex">
                            <div class="col-8">Promociones</div>
                            <div class="ml-auto">-$0.00</div>
                        </div>

                        <div class="border-top px-4 mx-3"> </div>
                        <div class="p-2 d-flex pt-3">
                            <div class="col-8">Intereses credito directo</div>
                            <div class="ml-auto">$20.00</div>
                        </div>
                        <div class="p-2 d-flex">
                            <div class="col-8">Valor transferencia interbancaria</div>
                            <div class="ml-auto">$0</div>
                        </div>
                        <div class="border-top px-4 mx-3"></div>
                        <div class="p-2 d-flex pt-3">
                            <div class="col-8">SUBTOTAL </div>
                            <div class="ml-auto"><b>$206.76</b></div>
                        </div>
                        <div class="p-2 d-flex">
                            <div class="col-8">IVA 12% <span class="fa fa-question-circle text-secondary"></span></div>
                            <div class="ml-auto"><b>$24.81</b></div>
                        </div>
                        <div class="border-top px-4 mx-3"></div>
                        <div class="p-2 d-flex pt-3">
                            <div class="col-8"><b>Total</b></div>
                            <div class="ml-auto"><b class="green">$231.57</b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>