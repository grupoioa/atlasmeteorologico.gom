@extends('layouts.master')

@section('title')
    <title>Precipitación</title>
@endsection

@section('content')

    <!--main container -->
     <div class="wrapper">
      {!! Breadcrumbs::render('precipitacion') !!}
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="f_sld_prod">

                        <h2>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        PRECIPITACIÓN
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
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna izquierda -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                         <a href="{{ asset('animaciones/prec_m')}}">
                            <img src="{{ asset('img/precipitacion/mensual-precipitacion.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Mensual
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                         <a href="{{ asset('animaciones/prec_hm')}}">
                            <img src="{{ asset('img/precipitacion/horaria-precipitacion.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                               Horaria mensual
                            </div>
                          </a>  
                        </div>
                    </div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/prec_mp')}}">
                            <img src="{{ asset('img/precipitacion/max-mensual-precipitacion.jpg')}}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Promedio mensual de máximas
                            </div>
                         </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 visible-xs visible-sm visible-md visible-lg">
                    <!-- Columna derecha -->
                    <div class="col-wrapper-left2">
                        <div class="thumb-5">
                        <a href="{{ asset('animaciones/prec_ma')}}">
                            <img src="{{ asset('img/precipitacion/max-absoluta-mensual-precipitacion.jpg') }}" class="img-responsive">
                            <div class="thumb-name"></div>
                            <div class="thumb-icons">
                                Máxima absoluta por mes
                            </div>
                          </a>
                        </div>
                    </div>
                </div><!-- fin columna derecha -->
                      </div>
        </div>
    
        

@endsection
