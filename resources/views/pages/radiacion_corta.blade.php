@extends('layouts.master')

@section('title')
    <title>Radiación de onda corta</title>
@endsection

@section('content')


    <!--main container -->
     <div class="wrapper">
      {!! Breadcrumbs::render('radiacion_corta') !!}
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="f_sld_prod">

                        <h2>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        RADIACIÓN ONDA CORTA
                                    </font>
                                </strong>
                            </center>
                        </h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna izquierda -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/roc_m')}}">
                            <img src="{{ asset('/img/radiacion_corta/mensual-radiacion-corta.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Mensual
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
       
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                         <a href="{{ asset('animaciones/roc_hm')}}">
                            <img src="{{ asset('/img/radiacion_corta/horaria-radiacion-corta.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Horaria mensual
                            </div>
                         </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
             <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 visible-xs visible-sm visible-md visible-lg">
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/roc_ma')}}">
                            <img src="{{ asset('/img/radiacion_corta/max-absoluta-mensual-radiacion-corta.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                               Máxima absoluta por mes
                            </div>
                         </a>
                        </div>
                    </div>
                </div>

                      </div>
        </div>
    </div><!-- end wrapper -->




@endsection
