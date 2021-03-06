<!-- Styles -->
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<!-- boltslider -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/boltslider.css')); ?>">
<!-- thumbs -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/thumbs.css')); ?>">
<style>
    body{
        background-color: #ccc;
    }
    #imagen {
        margin            : 0;
        background-color  : #1b1a3c;

    }
    .logotipos {
        float: left;
        width: 20.33%;
        padding: 5px;
    }
    .logotipos2 {
        float: left;
        width: 55.33%;
        padding-left: 5px;
        padding-top: 20px;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    .wrapper {
        //position: relative;
        padding :             0px 0px 30px 0px;
        background-color :    #def2f1;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);
        //z-index: 9000;
    }
    .wrapper_contacto {
    //position: relative;
        padding :             0px 0px 30px 0px;
        background-color :    #fff;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);
    //z-index: 9000;
    }
    .wrapper2{
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: white;
        padding-right: 100px;
        color: #1B1A3C;
        text-align: right;
        font-size: 21px;
    }
    .herramienta{
        padding-top: 20px;
        //background-color: white;
        //padding-right: 100px;
        color: #1B1A3C;
        text-align: left;
        font-size: 21px;
    }
    .variables{
        background-color: white;
        color: #1B1A3C;
        text-align: right;
        font-size: 21px;
    }
    .estadisticos{
       // background-color: white;

        color: #1B1A3C;
        //text-align: right;
        font-size: 21px;
    }
    .wrapper3 {
    //position: relative;
        background-color :    #def2f1;
        font-size: 24px;
        color: #1B1A3C;
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 100px;
        padding-right: 100px;
        text-align: justify;

    }
    .wrappero {
    //position: relative;
        background-color :    #fff;
        font-size: 20px;
        color: #1B1A3C;


        padding-left: 100px;

        text-align: justify;

    }
    .wrapper4 {
    //position: relative;
        background-color :    #fff;
        font-size: 22px;
        color: #1B1A3C;

        text-align: right;

    }
    .col-wrapper-left {
        background-color: transparent;
        margin-top:           30px;
        margin-left: 10px;
        margin-right: 5px;
        //border:           0 solid #ddd;
    }
    .col-wrapper-left2 {
        background-color: transparent;
    padding :             0px 0px 30px 0px;
    }
    .col-wrapper-left3 {
        background-color: transparent;
        margin-top:           30px;
        margin-left: 10px;
        margin-right: 5px;
        //border:           0 solid #ddd;
    }
    .col-wrapper-center {

        background-color: transparent;
        margin-top:           30px;
        margin-right: 5px;
        margin-left: 5px;
        //border:           0 solid #ddd;
    }
    .col-wrapper-right {

        background-color: transparent;
        margin-top:           30px;
        margin-left: 5px;
        margin-right: 5px;


       // border:           0 solid #ddd;
    }
    .f_sld_prod {
    //width: 1200px;
        margin-top            : 20px;
        margin-bottom: 20px;
        padding-top: 20px;
        background-image  : url("<?php echo e(asset('img/destacado-secundario-inicio.jpg')); ?>");
        background-color  : #1b1a3c;
    //border-left       : 0 solid #dddddd;

    }
    .f_sld_prod2 {
    //width: 1200px;
        margin-top            : 20px;
        margin-bottom: 20px;
        padding-top: 20px;
        background-image  : url("<?php echo e(asset('img/encabezado.jpg')); ?>");
        background-color  : #1b1a3c;
    //border-left       : 0 solid #dddddd;

    }
    #f_sld_prod3 {
    //width: 1200px;
        margin-top            : 20px;
        margin-bottom: 20px;
        padding-top: 20px;
        background-image  : url("<?php echo e(asset('img/destacado-secundario-inicio.jpg')); ?>");
        background-color  : #1b1a3c;
    //border-left       : 0 solid #dddddd;

    }
    #f_sld_background {
        margin: 0px;
        padding: 20px;
        background-image  : url("<?php echo e(asset('img/destacado-secundario-inicio.jpg')); ?>");
        background-color  : #1b1a3c;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);

    }
    #f_sld_info {
        margin: 0px;
        padding: 10px;
        background-image  : url("<?php echo e(asset('img/encabezado.jpg')); ?>");
        background-color  : #1b1a3c;

    }

    #f_sld_background2 {
        width: 100%;
        margin            : 0px auto;
       //background-position: center center;
        background-color  : #1b1a3c;
        background-image  : url("<?php echo e(asset('img/destacado-principal-acerca.jpg')); ?>");
        background-repeat: no-repeat;
        background-size:  cover;

    }
    .fondo{
        background-color: #fff;
        padding-top: 10px;

        //padding-right: 10px;
        //padding-left: 10px;
    }
    .titulo{
        padding-top: 20px;
        padding-left: 100px;
        font-size: 24px;
        font-weight: bold;
        //text-align: center;
        color: #1B1A3C;
    }
    .titulo2{
        padding: 20px;
        //padding-left: 100px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        color: #1B1A3C;
    }
    .columnas{
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 110px;
        font-size: 28px;
        //font-weight: bold;
        color: #1B1A3C;
        line-height: 26px;
    }
    .columnas2{
        padding-top: 0px;
        padding-left: 50px;
        font-size: 28px;
        color: #1B1A3C;
        line-height: 26px;
    }
    .columnas3{
        padding-top: 0px;
    //padding-left: 90px;
        font-size: 28px;
        color: #1B1A3C;
        line-height: 26px;
    }

    .footer_bg {
        margin-top: 0px;
        background-color:#1b1a3c;

        padding-top: 45px;
        padding-right: 5px;
        padding-left: 90px;
        margin-left: 0px;
        margin-right: 0px;
        //text-align: center;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);

    }
    footer[role="contentinfo"] {
        padding-top: 0;
        padding-bottom: 0;
        font-size: 14px;
    //background-color: darken(#11b7f7, 18%);
        color:#fff;
    a {
        color: #ffffff;
    &:focus,
    &:hover,
    &:active {
         color: #ffffff;
     }
    }
    .btn-default {
        color: #fff !important;
    }
    h4 {
        font-size: 120%;
        font-weight: bold;
        margin-bottom: 4px;
        text-transform: uppercase;
    }
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-brand {
        text-align: center;
        margin-top: 6px;
    }

    ul.social {
        margin: 0;
        padding: 24px 0 0;
        width: 100%;
        text-align: center;
    > li {
        display: inline-block;
    > a {
        display: inline-block;
        font-size: 18px;
        line-height: 30px;
    .square(30px);
        border-radius: 36px;
        background-color: darken(#d6e3f4, 27%); // @gray-light;
        color:#fff; // #fff; // edited
    margin: 0 3px 3px 0;
    &:hover {
         text-decoration: none;
         background-color: darken(#7ab0f0, 32%); // @link-hover-color;
         color: #fff; // added
     }
    }
    }
    }
   // }
//ANIMACION

.conta {
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
}
.col-centered{
    float: none;
    margin: 0 auto;
}
    canvas {
	margin-left: auto;
    margin-right: auto;
    display: block;
    
}

.material-icons {
	font-size: 18px;
}

.btn{
	padding: .2rem 0.2rem;
}

.btn-custom{
	border-bottom:2px solid #ccc;
 	position:relative;
}

.btn-custom:hover {
    top:1px;
    border-bottom-width:1px;
}

.btn-custom:active {
    top:2px;
    border-bottom:0;
}

.loader {
    border: 8px solid #f3f3f3; /* Light grey */
    border-top: 8px solid #555; /* Blue */
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: spin 2s linear infinite;

    margin-left: auto;
    margin-right: auto;
}
Dulce, [27.09.18 12:10]
/* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v41/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
}

    
.slide_style_right{
    float: right;
}


</style>
