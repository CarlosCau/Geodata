<!--
<?php 
session_start();
if($_SESSION["log"] !== "sesion_on"){
	echo"<meta http-equiv=refresh content=0.1;url=http://gestion.upaxer.com/index.php>";
}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Geografía Upaxer</title>
    <link rel="shortcut icon" href="img/zanahoria.jpeg" type="image/png" />
    <link rel="stylesheet" href="src/leaflet.css">
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/plugins/L.Control.Pan.css">
    <link rel="stylesheet" href="src/plugins/L.Control.Sidebar.css">
    <link rel="stylesheet" href="src/plugins/easy-button.css">
    <link rel="stylesheet" href="src/plugins/leaflet-opencage/src/css/L.Control.OpenCageSearch.css">
    <link rel="stylesheet" href="src/plugins/leaflet-styleeditor/css/Leaflet.StyleEditor.css">
    <link rel="stylesheet" href="src/plugins/MarkerCluster.css">
    <link rel="stylesheet" href="src/plugins/MarkerCluster.Default.css">
    <link rel="stylesheet" href="src/jquery-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="src/plugins/leaflet.reachability.css"/>
    <link rel="stylesheet" href="src/plugins/leaflet.geosearch.css" />
    
    <link rel="stylesheet" href="src/plugins/L.Control.SlideMenu.css" />
    <link rel="stylesheet" href="src/plugins/leaflet.measure.css" />
    <link rel="stylesheet" href="src/plugins/L.Control.ZoomMin.css" />
    <link rel="stylesheet" href="src/plugins/leaflet-legend.css">
<!--    <link rel="stylesheet" href="src/plugins/Leaflet.PolylineMeasure.css" />-->
<!--
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
        integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
        crossorigin=""/>
-->

    <script src="src/leaflet-src.js"></script>
    <script src="src/jquery-3.2.0.min.js"></script>
    <script src="src/plugins/L.Control.Pan.js"></script>
    <script src="src/plugins/L.Control.Sidebar.js"></script>
    <script src="src/plugins/easy-button.js"></script>
    <script src="src/plugins/leaflet-opencage/src/js/L.Control.OpenCageSearch.js"></script>
    <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleEditor.js"></script>
    <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleForms.js"></script>
    <script src="src/plugins/leaflet.ajax.min.js"></script>
    <script src="src/plugins/leaflet.markercluster.js"></script>
    <script src="src/jquery-ui.min.js"></script>
    <script src="src/plugins/leaflet.reachability.js"></script>
    <script src="src/plugins/simple_ajax_request.min.js"></script>
    <script src="src/plugins/leaflet.geosearch.min.js"></script>
    <script src="src/plugins/leaflet.geometryutil.js"></script>
    <script src="src/plugins/L.Control.ZoomMin.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQQSs0dPp_21EUf6eATD97BM6e432mi_E" async defer></script>
    <script src='https://unpkg.com/leaflet.gridlayer.googlemutant@latest/Leaflet.GoogleMutant.js'></script>
    <!-- interact.js -->
    <script src="https://unpkg.com/interact.js@1.2.8/dist/interact.min.js"></script>
    <!-- Leaflet-Pegman -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-pegman@0.0.9/leaflet-pegman.css" />
    <script src="https://unpkg.com/leaflet-pegman@0.0.9/leaflet-pegman.js"></script>
    <script src="https://raruto.github.io/cdn/leaflet-google/0.0.2/leaflet-google.js"></script>
    
    <script src="src/plugins/L.Control.SlideMenu.js"></script>
    <script src="src/plugins/leaflet.measure.js"></script>
	<script src="btab.js"></script>
    
    <script type="text/javascript">
        btab('buscarLib', 'tablaLib', true); // Iniciamos la funcion...
        btab('buscarST', 'tablaSt', true);
    </script>
    
    <script src="src/plugins/leaflet-legend.js"></script>
    
<!--    ***************  Begin Leaflet.Draw-->
        
    <script src="src/plugins/leaflet.draw.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.12/leaflet.draw.css"/>

    <script src="src/plugins/Leaflet.StyleEditor-master/dist/javascript/Leaflet.StyleEditor.min.js"></script>
    <link rel="stylesheet" href="src/plugins/Leaflet.StyleEditor-master/dist/css/Leaflet.StyleEditor.min.css"/>
        
<!--    **************  End of Lealet Draw-->
    
    <style>
        #mapdiv {
            height:100vh;
            z-index: 50;
            position:absolute;
        }
        
        .col-xs-6, .col-xs-12, .col-xs-4 {
            padding: 1px;
            font-size: 11px;
        }
        
        #divPAXact {
            background-color: beige;
        }
        
        #divPAXina {
            background-color: lightgray;
        }
        
        #divRegiones {
            background-color: #ffcda4;
        }
        
        #divSubregiones {
            background-color: #ffdfbb;
        }
        
        .errorMsg {
            padding: 0;
            text-align: center;
            background-color: darksalmon;
        }
        
        .reachability-control-settings-button
        {
            font-size: 22px;
        }
        
        #logo_upax{
            position: absolute;
            display: block;
            z-index: 100;
            width: 80px;
            margin-left: 91%;
            margin-top:40%;
            opacity: 0%;
         }
        #logo_upax img{
            width: 80%;
        }
        
        a{
            text-decoration: none;
            color: #000;
        }
        a:hover{
            text-decoration: none;
            color: #000;
            cursor: pointer;
        }
        a:visited{
            text-decoration: none;
            color: #000;
        }
        a:link{
            text-decoration: none;
            color: #000;
        }
        a:active{
            text-decoration: none;
            color: #000;
        }
        
        h4{
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
            margin-bottom: 0px;
        }
/*
        #subFiltros{
            margin-bottom: 10px;
        }
*/
        
        .btn-primary {
            font-size: 11px;
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .form-control{
            height: 30px;
            font-size: 11px;
        }

        .search{
            width: 87%;
            height: 20px;
            font-size: 12px;
/*
            margin-bottom: 2px;
            margin-left: 2px;
            margin-top: 2px;
*/
        }
        
        .col-xs-44{
            width: 100%;
            height: 250px;
            overflow:auto;
            border: 1px solid #000;
            font-size: 9px;
        }
        
        /**********TABLA***********/
        
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          z-index: 2000px;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 2px;
          font-size: 12px;
          word-break: break-all;
        }

          h2{
            text-align: center;
            font-weight: bold;
            margin-top: 5px;
            margin-bottom: 0px;
            font-size: 14px;
          }
        
        .filtroTAREAS {
          font-family: arial, sans-serif;
            display: block;
          width: 100%;

        }
        
        .filtro {
            height: 200px;
            display: inline-block;
            width: 100%;
            overflow: auto;
        }


/*
        td {
          word-break: break-all;
        }
*/
/*
        .tablaPopUp{
            background-color: black;
            position: absolute;
        }
*/
        
        /**********LEYENDA***********/        
		
        /*.legend {
            position: relative;
            margin-bottom: 0%;
            margin-right: 0%;
          padding: 6px 8px;
          font: 14px Arial, Helvetica, sans-serif;
          background: black;
          background: rgba(255, 255, 255, 0.8);
          line-height: 24px;
          color: #555;
        }*/
        
        .ToolTipStyle{
            color: orangered;
            font-size:14px;
            font-weight: 700;
            text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
            background-color: none;
            border-color: none;
            background: none;
            border: none;
            box-shadow: none;
            cursor: none;
            direction: 'center';
            fill: false;
            padding: 15px;
        }
        
        .ToolTipStyleST{
            color: blue;
            font-size:14px;
            font-weight: 700;
            text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
            background-color: none;
            border-color: none;
            background: none;
            border: none;
            box-shadow: none;
            cursor: none;
            direction: 'center';
            fill: false;
            padding: 15px;
        }
        
        .leaflet-tooltip-top:before, 
        .leaflet-tooltip-bottom:before, 
        .leaflet-tooltip-left:before, 
        .leaflet-tooltip-right:before {
            border: none !important;
        }
        
        ul{
            margin: 0;
            padding: 0;
            width: 100%;
        }
        

        #ui-id-5{
            width: 10px;
        }
        
        #ui-id-4{
            width: 10px;
        }
        
        #ui-id-3{
            width: 10px;
        }
        
        #ui-id-2{
            width: 10px;
        }
        
        #ui-id-1{
            width: 10px;
        }
        
        .autocomplete-items{
            background-color: white;
        }
        
        .autocomplete-items div:hover:not(.header){
            background-color: dodgerblue;
            border: 3px;
        }     
        
        .VerRes{
            height: 22px;
            background-color: #337ab7;
            color: white;
        }
        
        .VerRes:hover{
            height: 22px;
            background-color: #25415a;
            color: white;
        }
        
    </style>
</head>
<body>
    

   <div id="side-bar left" class=" col-md-3">
       <div id="divPAXact" class="col-xs-12">
           <div id="divPAXactLabel" class="text-center col-xs-12">
               <h4 id="lblPAXact">Upaxer Activos</h4>
           </div>
           <div id="divPAXactError" class="errorMsg col-xs-12"></div>
           <div id="divFindPAXact" class="form-group">
               <div class="col-xs-6">
                   <input type="text" id="txtFindPAXact" class="form-control" placeholder="ID de Upaxer">
               </div>
               <div class="col-xs-6">
                   <button id="btnFindPAXact" class="btn btn-primary btn-block"> Buscar PAX</button>
               </div>
           </div>
           <div id="divFilterPAXact" class="col-xs-12">
               <div class="text-center col-xs-4">
                   <input type='radio' name='fltPAXact' value ='ALL' checked>Todos
               </div>
               <div class="text-center col-xs-4">
                   <input type='radio' name='fltPAXact' value ='MS Pago en último semestre'><b>MS </b>Pago en último semestre
               </div>
               <div class="text-center col-xs-4">
                   <input type='radio' name='fltPAXact' value ='MS Pago previo a último semestre'><b>MS </b>Pago previo a último semestre
               </div>
               <div class="text-center col-xs-4">
                   <input type='radio' name='fltPAXact' value ='Encuestador Pago en último semestre'><b>Encuestador </b>Pago en último semestre
               </div>
               <div class="text-center col-xs-4">
                   <input type='radio' name='fltPAXact' value ='Encuestador Pago previo a último semestre'><b>Encuestador </b>Pago previo a último semestre
               </div>
               <div class="text-center col-xs-4">
                   <input type='radio' name='fltPAXact' value ='Solo Conekta Pago en último semestre'><b>Solo Conekta </b>Pago en último semestre
               </div>
               <div class="text-center col-xs-4">
                   <input type='radio' name='fltPAXact' value ='Solo Conekta Pago previo a último semestre'><b>Solo Conekta </b>Pago previo a último semestre
               </div>
           </div>
           <div class="" id="divPAXactData"></div>
       </div>
       <div id="divPAXina" class="col-xs-12">
           <div id="divPAXinaLabel" class="text-center col-xs-12">
               <h4 id="lblPAXina">Upaxer Inactivos</h4>
           </div>
           <div id="divPAXinaError" class="errorMsg col-xs-12"></div>
           <div id="divFindPAXina" class="form-group">
               <div class="col-xs-6">
                   <input type="text" id="txtFindPAXina" class="form-control" placeholder="ID de Upaxer">
               </div>
               <div class="col-xs-6">
                   <button id="btnFindPAXina" class="btn btn-primary btn-block"> Buscar PAX</button>
               </div>
           </div>
           <div id="divFilterPAXina" class="col-xs-12">
               <div class="text-center col-xs-3">
                   <input type='radio' name='fltPAXina' value ='ALL' checked>Todos
               </div>
               <div class="text-center col-xs-3">
                   <input type='radio' name='fltPAXina' value ='Registrado en 1Q 2020'>Registro 1Q 2020
               </div>
               <div class="text-center col-xs-3">
                   <input type='radio' name='fltPAXina' value ='Registrado en 4Q 2019'>Registro 4Q 2019
               </div>
               <div class="text-center col-xs-3">
                   <input type='radio' name='fltPAXina' value ='Registrado en 3Q 2019'>Registro 3Q 2019
               </div>
           </div>
           <div class="" id="divPAXinaData"></div>
       </div>
       
<!--FUNCIONES LIBRES--> 
       
       <div id="divSUClib" class="col-xs-12">
           <div id="divSUClibLabel" class="text-center col-xs-12">
               <h4 id="lblSUClib">Tareas Libres</h4>
           </div>
           <div id="divSUClibError" class="errorMsg col-xs-12"></div>
           <div id="divFindSUClib" class="form-group">
               <div class="col-xs-6">
                   <input type="text" id="txtFindSUClib" class="form-control" placeholder="Nombre de Sucursal">
               </div>
               <div class="col-xs-6">
                   <button id="btnFindSUClib" class="btn btn-primary btn-block"> Buscar sucursal</button>
               </div>
           </div>

           <div id="divFilterSUClib" class="col-xs-12" >               
            <input class="form-control" id="buscarLib" type="text" placeholder="Buscar Proyecto..." autocomplete="off">
            <table class="filtroTAREAS" id="tablaLib" border="2">
                  <thead>
                  </thead>
                  <tbody class="filtro">
                  <tr><td><input type='checkbox' name='fltSUClib' value ='En Marzo con UPAXER activar TOMIIN te hace ganar' checked><a href="#" Title="Fecha de Cierre de Operación: 04/04/2020 - Folio: 200300653">En Marzo con UPAXER activar TOMIIN te hace ganar</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUClib' value ='Gana dinero pidiendo información de un producto del banco_1' checked><a href="#" Title="Fecha de Cierre de Operación: 05/04/2020 - Folio: 200100123">Gana dinero pidiendo información de un producto del banco_1</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUClib' value ='Gana dinero pidiendo información de un crédito del banco_1' checked><a href="#" Title="Fecha de Cierre de Operación: 05/04/2020 - Folio: 200100123">Gana dinero pidiendo información de un crédito del banco_1</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUClib' value ='Haz un trámite en la caja del banco y gana dinero_1' checked><a href="#" Title="Fecha de Cierre de Operación: 05/04/2020 - Folio: 200100125">Haz un trámite en la caja del banco y gana dinero_1</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUClib' value ='Durante ABRIL recorre los pasillos de un Minisuper y gana dinero' checked><a href="#" Title="Fecha de Cierre de Operación: 24/04/2020 - Folio: 200300654">Durante ABRIL recorre los pasillos de un Minisuper y gana dinero</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUClib' value ='En abril descubre cuánto vale tu prenda de oro' checked><a href="#" Title="Fecha de Cierre de Operación: 24/04/2020 - Folio: 200300661">En abril descubre cuánto vale tu prenda de oro</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUClib' value ='En Abril Upaxer te regala gasolina 2020' checked><a href="#" Title="Fecha de Cierre de Operación: - - Folio: -">En Abril Upaxer te regala gasolina 2020</a></td></tr>
                      
                  </tbody>
            </table>
           </div>
              <div class="col-xs-4">
                  <button id="btnSUClibFilterAll" class="btn btn-primary btn-block">Todos</button>
               </div>
               <div class="col-xs-4">
                  <button id="btnSUClibFilterNone" class="btn btn-primary btn-block">Ninguno</button>
               </div>
               <div class="col-xs-4">
                  <button id="btnSUClibFilter" class="btn btn-primary btn-block">Filtrar</button>
               </div>

           <div class="" id="divSUClibData"></div>
       </div>
       
<!--FUNCIONES SIN TERMINAR-->
       
       <div id="divSUCst" class="col-xs-12">
           <div id="divSUCstLabel" class="text-center col-xs-12">
               <h4 id="lblSUCst">Tareas Sin Terminar</h4>
           </div>
           <div id="divSUCstError" class="errorMsg col-xs-12"></div>
           <div id="divFindSUCst" class="form-group">
               <div class="col-xs-6">
                   <input type="text" id="txtFindSUCst" class="form-control" placeholder="Nombre de Sucursal">
               </div>
               <div class="col-xs-6">
                   <button id="btnFindSUCst" class="btn btn-primary btn-block"> Buscar sucursal</button>
               </div>
           </div>
           <div id="divFilterSUCst" class="col-xs-12">
            <input class="form-control" id="buscarST" type="text" placeholder="Buscar Proyecto..." autocomplete="off">
            <table class="filtroTAREAS" id="tablaSt" border="2">
                  <thead>
                  </thead>
                  <tbody class="filtro">
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Mystery Shopper experiencia competencia regional Préstamos Personales 3ra vuelta' checked><a href="#" Title="Fecha de Cierre de Operación: 30/10/2019 - Folio: -">Mystery Shopper experiencia competencia regional Préstamos Personales 3ra vuelta</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Pide un préstamo de 3000 en la CDMX a 12 meses' checked><a href="#" Title="Fecha de Cierre de Operación: 12/02/2020 - Folio: 200010031">Pide un préstamo de 3000 en la CDMX a 12 meses</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='En Marzo con UPAXER activar TOMIIN te hace ganar' checked><a href="#" Title="Fecha de Cierre de Operación: 04/04/2020 - Folio: 200300653">En Marzo con UPAXER activar TOMIIN te hace ganar</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Gana dinero pidiendo información de un producto del banco_1' checked><a href="#" Title="Fecha de Cierre de Operación: 05/04/2020 - Folio: 200100123">Gana dinero pidiendo información de un producto del banco_1</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Haz un trámite en la caja del banco y gana dinero_1' checked><a href="#" Title="Fecha de Cierre de Operación: 05/04/2020 - Folio: 200100125">Haz un trámite en la caja del banco y gana dinero_1</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Gana dinero pidiendo información de un crédito del banco_1' checked><a href="#" Title="Fecha de Cierre de Operación: 05/04/2020 - Folio: 200100123">Gana dinero pidiendo información de un crédito del banco_1</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Durante Abril pregunta sobre Créditos Personales' checked><a href="#" Title="Fecha de Cierre de Operación: 05/04/2020 - Folio: 200300687">Durante Abril pregunta sobre Créditos Personales</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='En abril descubre cuánto vale tu prenda de oro CDMX' checked><a href="#" Title="Fecha de Cierre de Operación: 13/04/2020 - Folio: 200300661">En abril descubre cuánto vale tu prenda de oro CDMX</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='En abril descubre cuánto vale tu prenda de oro' checked><a href="#" Title="Fecha de Cierre de Operación: 24/04/2020 - Folio: 200300661">En abril descubre cuánto vale tu prenda de oro</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Durante ABRIL recorre los pasillos de un Minisuper y gana dinero' checked><a href="#" Title="Fecha de Cierre de Operación: 24/04/2020 - Folio: 200300654">Durante ABRIL recorre los pasillos de un Minisuper y gana dinero</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Este 2020 da seguimiento a tu Crédito Personal en una tienda departamental' checked><a href="#" Title="Fecha de Cierre de Operación: 28/08/2020 - Folio: 200100150">Este 2020 da seguimiento a tu Crédito Personal en una tienda departamental</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='En Abril Upaxer te regala gasolina 2020' checked><a href="#" Title="Fecha de Cierre de Operación: - - Folio: -">En Abril Upaxer te regala gasolina 2020</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Programa de Certificación Azteca Servicios' checked><a href="#" Title="Fecha de Cierre de Operación: Indefinido - Folio: 19030897">Programa de Certificación Azteca Servicios</a></td></tr>
                  <tr><td><input type='checkbox' name='fltSUCst' value ='Programa de Certificación Azteca Comercializadores' checked><a href="#" Title="Fecha de Cierre de Operación: Indefinido - Folio: 19030897">Programa de Certificación Azteca Comercializadores</a></td></tr>
                  
                  </tbody>
            </table>
           </div>
               <div class="col-xs-4">
                  <button id="btnSUCstFilterAll" class="btn btn-primary btn-block">Todos</button>
               </div>
               <div class="col-xs-4">
                  <button id="btnSUCstFilterNone" class="btn btn-primary btn-block">Ninguno</button>
               </div>
               <div class="col-xs-4">
                  <button id="btnSUCstFilter" class="btn btn-primary btn-block">Filtrar</button>
               </div>
           <div class="" id="divSUCstData"></div>
       </div>
       
<!--FUNCIONES NEGOCIOS-->
       
        <div id="divSUC" class="col-xs-12">
           <div id="divSUCLabel" class="text-center col-xs-12">
               <h4 id="lblSUC">Negocios</h4>
           </div>
           <div id="divSUCError" class="errorMsg col-xs-12"></div>
           <div id="divFindSUC" class="form-group">
               <div class="col-xs-6">
                   <input type="text" id="txtFindSUC" class="form-control" placeholder="ID / Nombre de Negocio">
               </div>
               <div class="col-xs-6">
                   <button id="btnFindSUC" class="btn btn-primary btn-block"> Buscar sucursal</button>
               </div>
           </div>
           <div id="divFilterSUC" class="col-xs-12">
               <div class="col-xs-4">
                   <input type='checkbox' name='fltSUC' value ='Banco Azteca' >Banco Azteca<br>
                   <input type='checkbox' name='fltSUC' value ='ATT' >ATT<br>
                   <input type='checkbox' name='fltSUC' value ='Total Play' >Total Play<br>
                   <input type='checkbox' name='fltSUC' value ='LOREAL' >LOREAL<br>
<!--                   <input type='checkbox' name='fltSUC' value ='OXXO' >OXXO<br>-->
                   <button id="btnSUCFilterAll" class="btn btn-primary btn-block">Todos</button>
               </div>
               <div class="col-xs-4">
                   <input type='checkbox' name='fltSUC' value ='NETO' >NETO<br>
                   <input type='checkbox' name='fltSUC' value ='Aeropuerto' >Aeropuerto<br>
                   <input type='checkbox' name='fltSUC' value ='CESIT' >CESIT<br>
                   <input type='checkbox' name='fltSUC' value ='Canales Terceros' >Canales Terceros<br>
                   <button id="btnSUCFilterNone" class="btn btn-primary btn-block">Ninguno</button>
               </div>
               <div class="col-xs-4">
                   <input type='checkbox' name='fltSUC' value ='Cinemex' >Cinemex<br>
                   <input type='checkbox' name='fltSUC' value ='BP' >BP<br>
                   <input type='checkbox' name='fltSUC' value ='Micronegocio' >Micronegocio<br>
                   <input type='checkbox' name='fltSUC' value ='Grupo Walmart' >Grupo Walmart<br>
                   <button id="btnSUCFilter" class="btn btn-primary btn-block">Filtrar</button>
               </div>
           </div>
           <div class="" id="divSUCData"></div>
        </div>
        
<!--FUNCIONES REGIONES-->
        
        <div id="divRegiones" class="col-xs-12">
            <div id="divRegionesLabel" class="text-center col-xs-12">
                <h4 id="lblRegiones">Regiones</h4>
            </div>
            <div id="divFilterRegiones" class="col-xs-12">
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='ALL' checked>Todas
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='Centro Oriente'>Centro Oriente
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='Centro Poniente'>Centro Poniente
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='Pacífico'>Pacífico
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='Norte'>Norte
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='Occidente'>Occidente
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='Tierra Caliente'>Tierra Caliente
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltRegiones' value='Sur'>Sur
                </div>
                
            </div>
            <div class="" id="divRegionesData"></div>
        </div>
        
        
<!--FUNCIONES SUBREGIONES-->
        
        <div id="divSubregiones" class="col-xs-12">
            <div id="divSubregionesLabel" class="text-center col-xs-12">
                <h4 id="lblSubregiones">Subregiones</h4>
            </div>
            <div id="divFilterSubregiones" class="col-xs-12">
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='ALL' checked>Todas
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Centro Oriente 1'>Centro Oriente 1
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Centro Oriente 2'>Centro Oriente 2
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Centro Poniente 1'>Centro Poniente 1
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Centro Poniente 2'>Centro Poniente 2
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Pacífico 1'>Pacífico 1
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Norte 1'>Norte 1
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Norte 2'>Norte 2
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Occidente 1'>Occidente 1
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Occidente 2'>Occidente 2
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Occidente 3'>Occidente 3
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Tierra Caliente 1'>Tierra Caliente 1
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Tierra Caliente 2'>Tierra Caliente 2
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Sur 1'>Sur 1
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Sur 2'>Sur 2
                </div>
                <div class="col-xs-4">
                    <input type='radio' name='fltSubregiones' value='Sur 3'>Sur 3
                </div>
                
            </div>
            <div class="" id="divSubregionesData"></div>
        </div>
        
    </div>
    
    <div id="legend">
        <p><center><h4>TAREAS</h4></center></p>
        <img src='data/Libres.png'<center><span>   Libres</span></center><br>
        <p><img src='data/SinTerminar.png'<center><span>   SinTerminar</span></center></p>
        <p><center><h4>CLUSTERS</h4></center></p>
        <img src='data/Cluster1.png'<center><span>1 - 5</span></center><br>
        <img src='data/Cluster2.png'<center><span>6 - 10</span></center><br>
        <img src='data/Cluster3.png'<center><span>11 - 25</span></center><br>
        <img src='data/Cluster4.png'<center><span>26 - 50</span></center><br>
        <img src='data/Cluster5.png'<center><span>>51</span></center><br>
    </div>
    
    <div id="mapdiv" class="col-xs-12"></div> 
   
    <script>
        var lyrOSM;
        var lyrPAXact;
        var lyrPAXina;
        var lyrSUCst;
        var lyrSUClib;
        var lyrSUC;
        var lyrSearch;
        var lyrPAXactCluster;
        var lyrPAXinaCluster;
        var lyrSUCstCluster;
        var lyrSUClibCluster;
        var lyrSUCCluster;
        var fgpDrawnItems;
        var ctlAttribute;
        var ctlScale;
        var ctlPan;
        var ctlEasybutton;
        var ctlEasybuttonT;
        var ctlSidebar;
        var ctlSearch;
        var ctlLayers;
        var ctlDraw;
        var ctlStyle;
        var objOverlays;
        var icnPAXact1;
        var icnPAXact2;
        var icnPAXact3;
        var icnPAXact4;
//        var icnPaxAzul;
//        var icnPaxMora;
//        var icnPaxRosa;
        var icnPaxVer;
        var icnPaxCon;
        var arPAXact = [];
        var arPAXina = [];
        var arSUCst = [];
        var icnSUCst;
        var arSUClib = [];
        var icnSUClib;
        var icnBAZ;
        var icnNETO;
        var icnTP;
        var icnAero;
        var icnATT;
        var icnCESIT;
        var icnCine;
        var icnBP;
        var lyrRegiones;
        var lyrSubregiones;
        var icnWalmart;
        var icnL;
        var icnCT;
        var icnMicro;
        var arSUC = [];
        var arRegiones = [];
        var arSubregiones = [];
        var legend;
        
        //****************** Map Initialization ***********************
        
        $(document).ready(function(){
            
            bounds = new L.LatLngBounds(new L.LatLng(4,-220.0), new L.LatLng(49.5,15));
            
            mymap = L.map('mapdiv',{center:[24,-102], zoom:5, minZoom:4, maxZoom:20,zoomControl:false,attributionControl:false,maxBounds: bounds,maxBoundsViscosity: 1.0});
            var roads = L.gridLayer.googleMutant({
                type: 'roadmap',
                styles : [
                    {"featureType": "administrative.country",
              "elementType": "geometry",
              "stylers": [{ 
                        "weight": 2 
                },{ 
                        "color": "#436775" }]
              },{
              "featureType": "administrative.province",
              "elementType": "geometry",
              "stylers": [{ 
                        "weight": 3 
                },{ 
                        "color": "#116BD1" }]
              },{
              "featureType": "administrative.neighborhood",
              "elementType": "geometry",
              "stylers": [{ 
                        "weight": 2 
                },{ 
                        "color": "#436775" }]
              }
                ]

            }).addTo(mymap);
            
            var pegmanControl = new L.Control.Pegman({
                position: 'bottomright', // position of control inside the map
                theme: "leaflet-pegman-v3-default", // or "leaflet-pegman-v3-small"
            });
            pegmanControl.addTo(mymap); 
            
            var popup = L.popup();

            function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("<b><big>Coordenadas:</b></big><br> " + e.latlng.lat.toString() + "," +  e.latlng.lng.toString())
                .openOn(mymap);
            }

            mymap.on('contextmenu', onMapClick);
            
            mymap.doubleClickZoom.disable();
            
            objBasemaps = {
                "Mapa Base": lyrOSM
            };
            
            ctlPan = L.control.pan({position:"topright"}).addTo(mymap);

            mymap.addControl(new L.Control.ZoomMin({position:"topright"}));
            
            var GeoSearchControl = window.GeoSearch.GeoSearchControl;
            var OpenStreetMapProvider = window.GeoSearch.OpenStreetMapProvider;

            var provider = new OpenStreetMapProvider({ params: { countrycodes: 'MX' }, });

            var searchControl = new GeoSearchControl({
              provider: provider,
                style: 'button',
                showMarker: true,
                showPopup: false,
                retainZoomLevel: false, 
                position: 'topleft',
                animateZoom: true
            });
            mymap.addControl(searchControl);
            
            ctlSidebar = L.control.sidebar('side-bar left').addTo(mymap);
            
            ctlAttribute = L.control.attribution({position:'bottomleft'}).addTo(mymap);
            ctlAttribute.addAttribution('Management Information System');
            ctlAttribute.addAttribution('&copy<a href="https://upax.com.mx">UPAX, Grupo Salinas</a>');
            
            ctlScale= L.control.scale({position:'bottomleft',imperial:false}).addTo(mymap);

            ctlEasybutton = L.easyButton('glyphicon glyphicon-transfer', function(){
                ctlSidebar.toggle();
            }).addTo(mymap);
        
            
            // TABLA ///////////
            
            var contents = '';
            contents += '<form autocomplete="off" > <ul class="suggestions"><table border="2"><tr><th bgcolor="#cdcdcd" colspan="3"><h2>Sucursales con Tareas Pendientes</h2></th></tr><tr><th>REGIÓN</th><th>Libres</th><th>Sin Terminar</th></tr>	  <tr><td>Centro Oriente</td><td>516</td><td>559</td></tr><tr><td>Centro Poniente</td><td>109</td><td>287</td></tr><tr><td>Norte</td><td>51</td><td>69</td></tr><tr><td>Occidente</td><td>186</td><td>147</td></tr><tr><td>Pacífico</td><td>92</td><td>63</td></tr><tr><td>Sur</td><td>145</td><td>293</td></tr><tr><td>Tierra Caliente</td><td>152</td><td>117</td></tr><tr bgcolor="#c3c3c3"><td><b>TOTAL</td><td><b>1251</td><td><b>1535</td></tr>   </table> </ul><input id="myInput" name="myCountry" type="text" class="search" placeholder="  Buscar Proyecto. . . "><input id="miBoton" type="button" value="Ver" class="VerRes"></form>';

            var slideMenu = L.control.slideMenu('', {position: 'topright', menuposition: 'topright', width: '15%', height: 'auto', delay: '50', icon: 'fas fa-table fa-2x'}).addTo(mymap);
            slideMenu.setContents(contents);
      
            const search = document.querySelector('.search');
            const searchpro = document.querySelector('.VerRes');
     
            search.addEventListener('keyup', autocomplete(document.getElementById("myInput"), countries));
            
        //****************** Iconos ***********************
            
            icnPAXact1 = L.icon({iconUrl:'img/UpaxerN1.svg',iconSize:[30,30]});
            icnPAXact2 = L.icon({iconUrl:'img/UpaxerN2.svg',iconSize:[30,30]});
            icnPAXact3 = L.icon({iconUrl:'img/UpaxerN3.svg',iconSize:[30,30]});
            icnPAXact4 = L.icon({iconUrl:'img/UpaxerN4.svg',iconSize:[30,30]});
            icnPaxCon = L.icon({iconUrl:'img/UpaxerConek.svg',iconSize:[30,30]});
            
//            icnPaxAzul = L.icon({iconUrl:'img/UpaxerAzu.svg',iconSize:[30,30]});
//            icnPaxMora = L.icon({iconUrl:'img/UpaxerMor.svg',iconSize:[30,30]});
//            icnPaxRosa = L.icon({iconUrl:'img/UpaxerRos.svg',iconSize:[30,30]});
            icnPaxVer = L.icon({iconUrl:'img/UpaxerVer.svg',iconSize:[30,30]});
            
            icnSUCst = L.icon({iconUrl:'img/SinTerminar.svg',iconSize:[35,35]});
            icnSUClib = L.icon({iconUrl:'img/Libres.svg',iconSize:[35,35]});
            
            icnBAZ = L.icon({iconUrl:'img/BAZ.svg',iconSize:[30,30]});
            icnNETO = L.icon({iconUrl:'img/NETO.svg',iconSize:[30,30]});
            icnTP = L.icon({iconUrl:'img/TotalPlay.svg',iconSize:[30,30]});
            icnAero = L.icon({iconUrl:'img/Volaris.svg',iconSize:[30,30]});
            icnATT = L.icon({iconUrl:'img/ATT.svg',iconSize:[30,30]});
            icnCESIT = L.icon({iconUrl:'img/Cesit.svg',iconSize:[30,30]});
            icnCine = L.icon({iconUrl:'img/Cinemex.svg',iconSize:[30,30]});
            icnBP = L.icon({iconUrl:'img/BP.svg',iconSize:[30,30]});
            icnWalmart = L.icon({iconUrl:'img/Walmart.svg',iconSize:[30,30]});
            icnL = L.icon({iconUrl:'img/Loreal.svg',iconSize:[30,30]});
            icnCT = L.icon({iconUrl:'img/CanalesTerceros.svg',iconSize:[30,30]});
            icnMicro = L.icon({iconUrl:'img/Micro.svg',iconSize:[30,30]});
            
        //****************** Carga de capas, Clusters y autocomletado ***********************
            
            lyrPAXactCluster = L.markerClusterGroup({
                spiderfyOnMaxZoom: false,
                showCoverageOnHover: true,
                zoomToBoundsOnClick: true,
                disableClusteringAtZoom: 11
//                maxClusterRadius: 70
            });
            
            lyrPAXact = L.geoJSON.ajax('data/Upaxer_act.geojson',{pointToLayer:returnPAXactMarker, filter:filterPAXact});
            
            lyrPAXact.on ('data:loaded', function (){
                arPAXact.sort(function(a,b){return a-b});
                $("#txtFindPAXact").autocomplete({
                    source:arPAXact
                });
                
                lyrPAXactCluster.clearLayers();
                lyrPAXactCluster.addLayer(lyrPAXact);
//                lyrPAXactCluster.addTo(mymap);
            });
            
            lyrPAXinaCluster = L.markerClusterGroup({
                spiderfyOnMaxZoom: false,
                showCoverageOnHover: true,
                zoomToBoundsOnClick: true,
                disableClusteringAtZoom: 11
            });
            
            lyrPAXina = L.geoJSON.ajax('data/Upaxer_ina.geojson',{pointToLayer:returnPAXinaMarker,filter:filterPAXina});
            
            lyrPAXina.on ('data:loaded', function (){
                arPAXina.sort(function(a,b){return a-b});
                $("#txtFindPAXina").autocomplete({
                    source:arPAXina
                });
                
                lyrPAXinaCluster.clearLayers();
                lyrPAXinaCluster.addLayer(lyrPAXina);
            });
            
            lyrSUCCluster = L.markerClusterGroup({
                spiderfyOnMaxZoom: false,
                showCoverageOnHover: true,
                zoomToBoundsOnClick: true,
                disableClusteringAtZoom: 11
            });
            
            lyrSUC = L.geoJSON.ajax('data/Negocios.geojson',{pointToLayer:returnSUCMarker,filter:filterSUC});
            
            lyrSUC.on ('data:loaded', function (){
                arSUC.sort(function(a,b){return a-b});
                $("#txtFindSUC").autocomplete({
                    source:arSUC
                });
                lyrSUCCluster.clearLayers();
                lyrSUCCluster.addLayer(lyrSUC);
                lyrSUCCluster.addTo(mymap);
            });
            
            lyrSUClibCluster = L.markerClusterGroup({
                spiderfyOnMaxZoom: true,
                showCoverageOnHover: true,
                zoomToBoundsOnClick: true,
                disableClusteringAtZoom: 22
            });
            
            lyrSUClib = L.geoJSON.ajax('data/Libres.geojson',{pointToLayer:returnSUClibMarker,filter:filterSUClib});
            
            lyrSUClib.on ('data:loaded', function (){
                arSUClib.sort(function(a,b){return a-b});
                $("#txtFindSUClib").autocomplete({
                    source:arSUClib
                });
                lyrSUClibCluster.clearLayers();
                lyrSUClibCluster.addLayer(lyrSUClib);
                lyrSUClibCluster.addTo(mymap);
            });
            
            var countlib = lyrSUClib.getLayers().length;
            
            lyrSUCstCluster = L.markerClusterGroup({
                spiderfyOnMaxZoom: true,
                showCoverageOnHover: true,
                zoomToBoundsOnClick: true,
                disableClusteringAtZoom: 22
            });
            
            lyrSUCst = L.geoJSON.ajax('data/SinTerminar.geojson',{pointToLayer:returnSUCstMarker,filter:filterSUCst});
            
            lyrSUCst.on ('data:loaded', function (){
                arSUCst.sort(function(a,b){return a-b});
                $("#txtFindSUCst").autocomplete({
                    source:arSUCst
                });
                lyrSUCstCluster.clearLayers();
                lyrSUCstCluster.addLayer(lyrSUCst);
                lyrSUCstCluster.addTo(mymap);
            });
            
            ctlStyle = L.control.styleEditor({position:'topleft',useGrouping: false}).addTo(mymap);
            
            lyrSubregiones = L.geoJSON.ajax('data/Subregiones.geojson', {style:styleSubregiones, filter:filterSubregiones}).addTo(mymap);
            lyrSubregiones.on('data:loaded', function(){
                arSubregiones.sort(function(a,b){return a-b});
            });
            
            lyrRegiones = L.geoJSON.ajax('data/Regiones.geojson', {style:styleRegiones, filter:filterRegiones});
            lyrRegiones.on('data:loaded', function(){
                arRegiones.sort(function(a,b){return a-b});
            });
            
            //****************** Isocronas ***********************/////////////////
            
            function getColourByRange(value) {
                switch (value) {
                    case 15:
                        return '#00e700';
                    case 30:
                        return '#ffff1e';
                    case 45:
                        return '#ffff1e';
                    case 60:
                        return '#fc783a';
                }
            }
            
            // Example function to style the isoline polygons when they are returned from the API call
            function styleIsolines(feature) {
                var rangeVal = feature.properties['Range'];
                    // If the range is based on distance, multiply the value by 10 to match the time range values
                    if (feature.properties['Measure'] == 'time');

                    return {
                        color: getColourByRange(rangeVal),
                        opacity: 0.5,
                        fillOpacity: 0.4
                    }
                }

            function highlightIsolines(e) {
                var layer = e.target;
                layer.setStyle({
                    fillColor: '#ffea00',
                    dashArray: '1,13',
                    weight: 4,
                    fillOpacity: '0.5',
                    opacity: '1'
                });
            }
            function resetIsolines(e) {
                var layer = e.target;
                reachabilityControl.isolinesGroup.resetStyle(layer);
            }
            function clickIsolines(e) {
                var layer = e.target;
                var props = layer.feature.properties;
                var popupContent = 'Tiempo: 0 - ' + (props['Range']) + ' ' + props['Range units'];
                layer.bindPopup(popupContent).openPopup();
            }
            function isolinesOrigin(latLng, travelMode, rangeType) {
                return L.circleMarker(latLng, { radius: 4, weight: 2, color: '#0073d4', fillColor: '#fff', fillOpacity: 1 });
            }            
            
            var reachabilityControl = L.control.reachability({
                apiKey: '5b3ce3597851110001cf6248fd3f518029ed4b61936293d00794de8e',
                styleFn: styleIsolines,
                mouseOverFn: highlightIsolines,
                mouseOutFn: resetIsolines,
                clickFn: clickIsolines,
                markerFn: isolinesOrigin,
                expandButtonContent: '',
                expandButtonStyleClass: 'reachability-control-expand-button fa fa-bullseye',
                collapseButtonContent: '',
                collapseButtonStyleClass: 'reachability-control-collapse-button fa fa-caret-up',
                drawButtonContent: '',
                drawButtonStyleClass: 'fa fa-pencil',
                deleteButtonContent: '',
                deleteButtonStyleClass: 'fa fa-trash',
                distanceButtonContent: '',
                distanceButtonStyleClass: 'fa fa-road',
                timeButtonContent: '',
                timeButtonStyleClass: 'fa fa-clock-o',
//                drivingButtonContent: '',
//                drivingButtonStyleClass: 'fa fa-car',
//                cyclingButtonContent: '',
//                cyclingButtonStyleClass: 'fa fa-bicycle',
//                walkingButtonContent: '',
//                walkingButtonStyleClass: 'fa fa-car',
                travelModeButton1StyleClass: 'fa fa-car',
            }).addTo(mymap);
            
            
            // REGLA ///////////


		      var plugin = L.control.measure({
		        //  control position
		        position: 'topleft',
		        //  weather to use keyboard control for this plugin
		        keyboard: true,
		        //  shortcut to activate measure
		        activeKeyCode: '*'.charCodeAt(0),
		        //  shortcut to cancel measure, defaults to 'Esc'
		        cancelKeyCode: 27,
		        //  line color
		        lineColor: 'red',
		        //  line weight
		        lineWeight: 2,
		        //  line dash
		        lineDashArray: '6, 6',
		        //  line opacity
		        lineOpacity: 1,
		        //  distance formatter
		        // formatDistance: function (val) {
		        //   return Math.round(1000 * val / 1609.344) / 1000 + 'mile';
		        // }
                icon: 'fas fa-table fa-2x'
		      }).addTo(mymap)
            
//            L.control.polylineMeasure ({position:'topleft', unit:'metres', showBearings:false, clearMeasurementsOnStop: false, showClearControl: true, showUnitControl: false}).addTo (mymap);
            
        //****************** Control Layers ***********************
            
            objOverlays = {
                "Upaxer Activos": lyrPAXactCluster,
                "Upaxer Inactivos": lyrPAXinaCluster,
                "Tareas Libres": lyrSUClibCluster,
                "Tareas Sin Terminar": lyrSUCstCluster,
                "Negocios": lyrSUCCluster,
                "Subregiones": lyrSubregiones,
                "Regiones": lyrRegiones
            };

            ctlLayers = L.control.layers(null,objOverlays, {position:'topleft'});
            ctlLayers.addTo(mymap);
            
////////// LEYENDA //////////
            
            var ctlLegend = new L.Control.Legend({
                position: 'topleft',
                controlButton:{title:"TAREAS"}
            }).addTo(mymap);
            
            $(".legend-container").append($("#legend"));
            $(".legend-toggle").append($("<i class='legend-toggle-icon fa fa-server fa-2x' style='color:#000'></i>"));
            
        //****************** Visualizacion de capas de UPAXER ***********************
                
            /////////// ACTIVOS //////////////
            
            function returnPAXactMarker(json, latlng){
                var att = json.properties;
                arPAXact.push(att.id.toString());
                switch (att.color){
                    case '1. Naranja [dos trimestres]':
                        var icnPax = icnPAXact1;
                        break;
                    case '2. Naranja / Enc [dos trimestres]':
                        var icnPax = icnPAXact2;
                        break;
                    case '3. Naranja':
                        var icnPax = icnPAXact3;
                        break;
                    case '4. Naranja / Enc':
                        var icnPax = icnPAXact4;
                        break;
                    case 'Solo Conekta':
                        var icnPax = icnPaxCon;
                        break;
                } 
                
                return L.marker(latlng, {icon:icnPax}).bindTooltip("<table border='1' class='tablaPopUp'><tr><th bgcolor='#cdcdcd' colspan='2'><font size=2><center>"+att.concat+"</b></font></center></th></tr><tr><td><b>COLOR:</b></td><td> "+att.color+"</td><tr><td><b>Ultimo Pago / Fecha Alta:</b></td><td> "+att.upfa+"</td></table>");
            }
            
            function filterPAXact(json) {
                var att=json.properties;
                var optFilter = $("input[name=fltPAXact]:checked").val();
                if (optFilter=='ALL') {
                    return true;
                } else {
                    return (att.pagores==optFilter);
                }
            }
            
            $("#txtFindPAXact").on('keyup paste',function(){
                var val = $("#txtFindPAXact").val();
                testLayerAttribute(arPAXact,val, "ID de Upaxer", "#btnFindPAXact");
            });
            
            $("#btnFindPAXact").click(function(){
                var val = $("#txtFindPAXact").val();
                var lyr = returnLayerByAttribute(lyrPAXact,'id',val);
                if (lyr){
                    if (lyrSearch){
                        lyrSearch.remove();
                    }
                    lyrSearch = L.circle(lyr.getLatLng(), {radius:15, color:'red', weight:5, opacity:0.5, fillOpacity:0}).addTo(mymap);
                    var myZoom = {
                      start:  mymap.getZoom(),
                      end: mymap.getZoom()
                    };

                    mymap.on('zoomstart', function(e) {
                       myZoom.start = mymap.getZoom();
                    });

                    mymap.on('zoomend', function(e) {
                        myZoom.end = mymap.getZoom();
                        var diff = myZoom.start - myZoom.end;
                        if (diff > 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() * 2);
                        } else if (diff < 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() / 2);
                        }
                    });
                    mymap.setView(lyr.getLatLng(),18);
                    var att = lyr.feature.properties;
                    $("#divPAXactData").html(/*"<h5>PAX "+att.ID+"</h5><h5>COLOR: "+att.COLOR+" </h5>"*/"");
                    $("#divPAXactError").html("");
                } else {
                    $("#divPAXactError").html("**** ID de Upaxer no existe ****");
                }
            });
            
            $("#lblPAXact").click(function(){
                $("#divPAXactData").toggle();
            });
            
            $("input[name=fltPAXact]").click(function(){
                arPAXact=[];
                lyrPAXact.refresh();
            });
                
                //////////// INACTIVOS ///////////////
            
            function returnPAXinaMarker(json, latlng){
                var att = json.properties;
                arPAXina.push(att.id.toString());
                switch (att.color){
//                    case 'Azul [NACH]':
//                        var icnPAXina = icnPaxAzul;
//                        break;
//                    case 'Morado [Reclutamiento]':
//                        var icnPAXina = icnPaxMora;
//                        break;
//                    case 'Rosa [Talenteca]':
//                        var icnPAXina = icnPaxRosa;
//                        break;
                    case 'Verde [< 180 Días]':
                        var icnPAXina = icnPaxVer;
                        break;
                } 
                
                return L.marker(latlng, {icon:icnPAXina}).bindTooltip("<table border='1' class='tablaPopUp'><tr><th bgcolor='#cdcdcd' colspan='2'><font size=2><center>"+att.concat+"</b></font></center></th></tr><tr><td><b>COLOR:</b></td><td> "+att.color+"</td><tr><td><b>Ultimo Pago / Fecha Alta:</b></td><td> "+att.upfa+"</td></table>");
                
            }
                
            function filterPAXina(json) {
                var att=json.properties;
                var optFilter = $("input[name=fltPAXina]:checked").val();
                if (optFilter=='ALL') {
                    return true;
                } else {
                    return (att.pagores==optFilter);
                }
            }
            
            $("#txtFindPAXina").on('keyup paste',function(){
                var val = $("#txtFindPAXina").val();
                testLayerAttribute(arPAXina,val, "ID de Upaxer", "#btnFindPAXina");
            });
            
            $("#btnFindPAXina").click(function(){
                var val = $("#txtFindPAXina").val();
                var lyr = returnLayerByAttribute(lyrPAXina,'id',val);
                if (lyr){
                    if (lyrSearch){
                        lyrSearch.remove();
                    }
                    lyrSearch = L.circle(lyr.getLatLng(), {radius:15, color:'red', weight:5, opacity:0.5, fillOpacity:0}).addTo(mymap);
                    var myZoom = {
                      start:  mymap.getZoom(),
                      end: mymap.getZoom()
                    };

                    mymap.on('zoomstart', function(e) {
                       myZoom.start = mymap.getZoom();
                    });

                    mymap.on('zoomend', function(e) {
                        myZoom.end = mymap.getZoom();
                        var diff = myZoom.start - myZoom.end;
                        if (diff > 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() * 2);
                        } else if (diff < 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() / 2);
                        }
                    });
                    mymap.setView(lyr.getLatLng(),18);
                    var att = lyr.feature.properties;
                    $("#divPAXinaData").html(/*"<h5>PAX "+att.ID+"</h5><h5>COLOR: "+att.COLOR+" </h5>"*/"");
                    $("#divPAXinaError").html("");
                } else {
                    $("#divPAXinaError").html("**** ID de Upaxer no existe ****");
                }
            });
            
            $("#lblPAXina").click(function(){
                $("#divPAXinaData").toggle();
            });
            
            $("input[name=fltPAXina]").click(function(){
                arPAXina=[];
                lyrPAXina.refresh();
            });
            
            /////////// SIN TERMINAR //////////////
            
            function returnSUCstMarker(json, latlng){
                var att = json.properties;
                arSUCst.push(att.nombre.toString());
                return L.marker(
                    latlng, {icon:icnSUCst}
                ).bindPopup(
                    
                    "<table border='1' cellpading='-5' class='tablaPopUp'><tr><th bgcolor='#cdcdcd' colspan='2'><center><font size=2>"+att.ID_UBICACION+" / "+att.nombre+"</b></font></center></th></tr><tr><td><b>PROYECTO:</b></td><td>"+att.NOMPRO+"</h4></td><tr><td><b>FECHA CIERRE DE OPERACIÓN:</b></td><td>"+att.FCO+"</h4></td><tr><td><b>ID ASIGNACIÓN:</b></td><td>"+att.id_asig+"</h4></td><tr><td><b>USUARIO:</b></td><td>"+att.USUARIO+"</h4></td><tr><td><b>TIPO Y FECHA ASIGNACION:</b></td><td> "+att.TIPO_ASIGNACION+", "+att.FECHA_ASIGNACION+" - "+att.HORA_ASIGNACION+"</h4></td><tr><td><b>GESTOR:</b></td><td> "+att.Gestor+"</h4></td><tr><td><b>LOCALIDAD Y ESTADO:</b></td><td> "+att.Localidad+", "+att.Estado+"</h4></td><tr><td><b>REGIÓN:</b></td><td> "+att.Territorio+"</td><tr><td><b>HISTÓRICO PAX:</b></td><td> "+att.histpax+"</td><tr><td style='color:blue;'><b>DÍAS SIN TERMINAR:</b></td><b><td style='color:blue;'> "+att.dias+"</td></b></table>")
                
                .bindTooltip(att.dias+" ", { permanent: true ,className: 'ToolTipStyleST'})
                ;
                
            }
            
            //CASE TAREAS SIN TERMINAR
            function filterSUCst(json) {
                var arSUCstFilters=[];
                $("input[name=fltSUCst]").each(function(){
                    if (this.checked){
                        arSUCstFilters.push(this.value);
                    }
                });
                var att=json.properties;
                switch (att.NOMPRO){
                    case "Mystery Shopper experiencia competencia regional Préstamos Personales 3ra vuelta":return (arSUCstFilters.indexOf('Mystery Shopper experiencia competencia regional Préstamos Personales 3ra vuelta')>=0); break;
                    case "Pide un préstamo de 3000 en la CDMX a 12 meses":return (arSUCstFilters.indexOf('Pide un préstamo de 3000 en la CDMX a 12 meses')>=0); break;
                    case "En Marzo con UPAXER activar TOMIIN te hace ganar":return (arSUCstFilters.indexOf('En Marzo con UPAXER activar TOMIIN te hace ganar')>=0); break;
                    case "Gana dinero pidiendo información de un producto del banco_1":return (arSUCstFilters.indexOf('Gana dinero pidiendo información de un producto del banco_1')>=0); break;
                    case "Haz un trámite en la caja del banco y gana dinero_1":return (arSUCstFilters.indexOf('Haz un trámite en la caja del banco y gana dinero_1')>=0); break;
                    case "Gana dinero pidiendo información de un crédito del banco_1":return (arSUCstFilters.indexOf('Gana dinero pidiendo información de un crédito del banco_1')>=0); break;
                    case "Durante Abril pregunta sobre Créditos Personales":return (arSUCstFilters.indexOf('Durante Abril pregunta sobre Créditos Personales')>=0); break;
                    case "En abril descubre cuánto vale tu prenda de oro CDMX":return (arSUCstFilters.indexOf('En abril descubre cuánto vale tu prenda de oro CDMX')>=0); break;
                    case "En abril descubre cuánto vale tu prenda de oro":return (arSUCstFilters.indexOf('En abril descubre cuánto vale tu prenda de oro')>=0); break;
                    case "Durante ABRIL recorre los pasillos de un Minisuper y gana dinero":return (arSUCstFilters.indexOf('Durante ABRIL recorre los pasillos de un Minisuper y gana dinero')>=0); break;
                    case "Este 2020 da seguimiento a tu Crédito Personal en una tienda departamental":return (arSUCstFilters.indexOf('Este 2020 da seguimiento a tu Crédito Personal en una tienda departamental')>=0); break;
                    case "En Abril Upaxer te regala gasolina 2020":return (arSUCstFilters.indexOf('En Abril Upaxer te regala gasolina 2020')>=0); break;
                    case "Programa de Certificación Azteca Servicios":return (arSUCstFilters.indexOf('Programa de Certificación Azteca Servicios')>=0); break;
                    case "Programa de Certificación Azteca Comercializadores":return (arSUCstFilters.indexOf('Programa de Certificación Azteca Comercializadores')>=0); break;

                }
            }
            
            $("#txtFindSUCst").on('keyup paste',function(){
                var val = $("#txtFindSUCst").val();
                testLayerAttribute(arSUCst,val, "Nombre de Sucursal", "#btnFindSUCst");
            });
            
            $("#btnFindSUCst").click(function(){
                var val = $("#txtFindSUCst").val();
                var lyr = returnLayerByAttribute(lyrSUCst,'nombre',val);
                if (lyr){
                    if (lyrSearch){
                        lyrSearch.remove();
                    }
                    lyrSearch = L.circle(lyr.getLatLng(), {radius:15, color:'red', weight:5, opacity:0.5, fillOpacity:0}).addTo(mymap);
                    var myZoom = {
                      start:  mymap.getZoom(),
                      end: mymap.getZoom()
                    };

                    mymap.on('zoomstart', function(e) {
                       myZoom.start = mymap.getZoom();
                    });

                    mymap.on('zoomend', function(e) {
                        myZoom.end = mymap.getZoom();
                        var diff = myZoom.start - myZoom.end;
                        if (diff > 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() * 2);
                        } else if (diff < 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() / 2);
                        }
                    });
                    mymap.setView(lyr.getLatLng(),18);
                    var att = lyr.feature.properties;
                    $("#divSUCstData").html("");
                    $("#divSUCstError").html("");
                } else {
                    $("#divSUCstError").html("**** Sucursal no existe ****");
                }
            });
            
            $("#lblSUCst").click(function(){
                $("#divSUCstData").toggle();
            });
            
            $("#btnSUCstFilterAll").click(function(){
                $("input[name=fltSUCst]").prop('checked', true);
            });

            $("#btnSUCstFilterNone").click(function(){
                $("input[name=fltSUCst]").prop('checked', false);
            });
        
            $("#btnSUCstFilter").click(function(){
                arSUCst=[];
                lyrSUCst.refresh();
            });
        
            /////////// TAREAS LIBRES //////////////
            
            function returnSUClibMarker(json, latlng){
                var att = json.properties;
                arSUClib.push(att.nombre.toString());
                return L.marker(latlng, {icon:icnSUClib}).bindPopup(
                    
                    "<table border='1' width='450px'><tr><th bgcolor='#cdcdcd' colspan='2'><font size=2><center>"+att.ID_UBICACION+" / "+att.nombre+"</b></font></center></th></tr><tr><td><b>PROYECTO:</b></td><td> "+att.NOMPRO+"</td><tr><td><b>FECHA CIERRE DE OPERACIÓN:</b></td><td> "+att.FCO+"</td><tr><td><b>GESTOR:</b></td><td> "+att.Gestor+"</td><tr><td><b>ID ASIGNACIÓN:</b></td><td> "+att.id_asig+"</td><tr><td><b>LOCALIDAD Y ESTADO:</b></td><td> "+att.Localidad+", "+att.Estado+"</td><tr><td><b>REGIÓN:</b></td><td> "+att.Territorio+"</td><tr><td><b>HISTÓRICO PAX:</b></td><td> "+att.histpax+"</td><tr><td style='color:#FF5800;'><b>DÍAS LIBRE:</b></td><b><td style='color:#FF5800;'> "+att.dias+"</td></b></table>")
                    
                    .bindTooltip(att.dias+" ", { permanent: true ,className: 'ToolTipStyle'})
                ;
                
            }           
            
            //CASE DE TAREAS LIBRES
            function filterSUClib(json) {
                var arSUClibFilters=[];
                $("input[name=fltSUClib]").each(function(){
                    if (this.checked){
                        arSUClibFilters.push(this.value);
                    }
                });
                var att=json.properties;
                switch (att.NOMPRO){
                    case "En Marzo con UPAXER activar TOMIIN te hace ganar":return (arSUClibFilters.indexOf('En Marzo con UPAXER activar TOMIIN te hace ganar')>=0); break;
                    case "Gana dinero pidiendo información de un producto del banco_1":return (arSUClibFilters.indexOf('Gana dinero pidiendo información de un producto del banco_1')>=0); break;
                    case "Gana dinero pidiendo información de un crédito del banco_1":return (arSUClibFilters.indexOf('Gana dinero pidiendo información de un crédito del banco_1')>=0); break;
                    case "Haz un trámite en la caja del banco y gana dinero_1":return (arSUClibFilters.indexOf('Haz un trámite en la caja del banco y gana dinero_1')>=0); break;
                    case "Durante ABRIL recorre los pasillos de un Minisuper y gana dinero":return (arSUClibFilters.indexOf('Durante ABRIL recorre los pasillos de un Minisuper y gana dinero')>=0); break;
                    case "En abril descubre cuánto vale tu prenda de oro":return (arSUClibFilters.indexOf('En abril descubre cuánto vale tu prenda de oro')>=0); break;
                    case "En Abril Upaxer te regala gasolina 2020":return (arSUClibFilters.indexOf('En Abril Upaxer te regala gasolina 2020')>=0); break;

                }
            }
            
            $("#txtFindSUClib").on('keyup paste',function(){
                var val = $("#txtFindSUClib").val();
                testLayerAttribute(arSUClib,val, "Nombre de Sucursal", "#btnFindSUClib");
            });
            
            $("#btnFindSUClib").click(function(){
                var val = $("#txtFindSUClib").val();
                var lyr = returnLayerByAttribute(lyrSUClib,'nombre',val);
                if (lyr){
                    if (lyrSearch){
                        lyrSearch.remove();
                    }
                    lyrSearch = L.circle(lyr.getLatLng(), {radius:15, color:'red', weight:5, opacity:0.5, fillOpacity:0}).addTo(mymap);
                    var myZoom = {
                      start:  mymap.getZoom(),
                      end: mymap.getZoom()
                    };

                    mymap.on('zoomstart', function(e) {
                       myZoom.start = mymap.getZoom();
                    });

                    mymap.on('zoomend', function(e) {
                        myZoom.end = mymap.getZoom();
                        var diff = myZoom.start - myZoom.end;
                        if (diff > 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() * 2);
                        } else if (diff < 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() / 2);
                        }
                    });
                    mymap.setView(lyr.getLatLng(),18);
                    var att = lyr.feature.properties;
                    $("#divSUClibData").html("");
                    $("#divSUClibError").html("");
                } else {
                    $("#divSUClibError").html("**** Sucursal no existe ****");
                }
            });
            
            $("#lblSUClib").click(function(){
                $("#divSUClibData").toggle();
            });
            
            $("#btnSUClibFilterAll").click(function(){
                $("input[name=fltSUClib]").prop('checked', true);
            });

            $("#btnSUClibFilterNone").click(function(){
                $("input[name=fltSUClib]").prop('checked', false);
            });
        
            $("#btnSUClibFilter").click(function(){
                arSUClib=[];
                lyrSUClib.refresh();
            });
            
            /////////// SUCURSALES //////////////
            
            function returnSUCMarker(json, latlng){
                var att = json.properties;
                arSUC.push(att.concat.toString());
                switch (att.tipo){
                    case 'Banco Azteca':
                        var icnSUC = icnBAZ;
                        break;
                    case 'ATT':
                        var icnSUC = icnATT;
                        break;
                    case 'Total Play':
                        var icnSUC = icnTP;
                        break;
                    case 'NETO':
                        var icnSUC = icnNETO;
                        break;
                    case 'Aeropuerto':
                        var icnSUC = icnAero;
                        break;
                    case 'Cinemex':
                        var icnSUC = icnCine;
                        break;
                    case 'CESIT':
                        var icnSUC = icnCESIT;
                        break;
                    case 'BP':
                        var icnSUC = icnBP;
                        break;
//                    case 'WALDOS':
//                        var icnSUC = icnW;
//                        break;
                    case 'LOREAL':
                        var icnSUC = icnL;
                        break; 
                    case 'Canales Terceros':
                        var icnSUC = icnCT;
                        break; 
                    case 'Micronegocio':
                        var icnSUC = icnMicro;
                        break;
                    case 'Grupo Walmart':
                        var icnSUC = icnWalmart;
                        break; 
                } 
                
                return L.marker(latlng, {icon:icnSUC}).bindTooltip("<table border='1' class='tablaPopUp'><tr><th bgcolor='#cdcdcd' colspan='2'><font size=2><center>"+att.concat+"</b></font></center></th></tr><tr><td><b>MUNICIPIO:</b></td><td> "+att.mun+"</td><tr><td><b>ESTADO:</b></td><td> "+att.edo+"</td></table>");
                
            }
            
            function filterSUC(json) {
                var arSUCFilters=[];
                $("input[name=fltSUC]").each(function(){
                    if (this.checked){
                        arSUCFilters.push(this.value);
                    }
                });
                var att=json.properties;
                switch (att.tipo){
                    case "Banco Azteca":
                        return (arSUCFilters.indexOf('Banco Azteca')>=0);
                        break;
                    case "ATT":
                        return (arSUCFilters.indexOf('ATT')>=0);
                        break;
                    case "Total Play":
                        return (arSUCFilters.indexOf('Total Play')>=0);
                        break;
                    case "NETO":
                        return (arSUCFilters.indexOf('NETO')>=0);
                        break;
                    case "Aeropuerto":
                        return (arSUCFilters.indexOf('Aeropuerto')>=0);
                        break;
                    case "Cinemex":
                        return (arSUCFilters.indexOf('Cinemex')>=0);
                        break;
                    case "BP":
                        return (arSUCFilters.indexOf('BP')>=0);
                        break;
                    case "CESIT":
                        return (arSUCFilters.indexOf('CESIT')>=0);
                        break;
                    case "LOREAL":
                        return (arSUCFilters.indexOf('LOREAL')>=0);
                        break;
                    case "Canales Terceros":
                        return (arSUCFilters.indexOf('Canales Terceros')>=0);
                        break;
                    case "Micronegocio":
                        return (arSUCFilters.indexOf('Micronegocio')>=0);
                        break;
                    case "Grupo Walmart":
                        return (arSUCFilters.indexOf('Grupo Walmart')>=0);
                        break;
                }
            }
            
            $("#txtFindSUC").on('keyup paste',function(){
                var val = $("#txtFindSUC").val();
                testLayerAttribute(arSUC,val, "ID / Nombre de Negocio", "#btnFindSUC");
            });
            
            $("#btnFindSUC").click(function(){
                var val = $("#txtFindSUC").val();
                var lyr = returnLayerByAttribute(lyrSUC,'concat',val);
                if (lyr){
                    if (lyrSearch){
                        lyrSearch.remove();
                    }
                    lyrSearch = L.circle(lyr.getLatLng(), {radius:15, color:'red', weight:5, opacity:0.5, fillOpacity:0}).addTo(mymap);
                    var myZoom = {
                      start:  mymap.getZoom(),
                      end: mymap.getZoom()
                    };

                    mymap.on('zoomstart', function(e) {
                       myZoom.start = mymap.getZoom();
                    });

                    mymap.on('zoomend', function(e) {
                        myZoom.end = mymap.getZoom();
                        var diff = myZoom.start - myZoom.end;
                        if (diff > 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() * 2);
                        } else if (diff < 0) {
                            lyrSearch.setRadius(lyrSearch.getRadius() / 2);
                        }
                    });
                    mymap.setView(lyr.getLatLng(),18);
                    var att = lyr.feature.properties;
                    $("#divSUCData").html(/*"<h5> "+att.concat+"</h5><h5>TIPO: "+att.tipo+" </h5>"*/"");
                    $("#divSUCError").html("");
                } else {
                    $("#divSUCError").html("**** Sucursal no existe ****");
                }
            });
            
            $("#lblSUC").click(function(){
                $("#divSUCData").toggle();
            });
            
            $("#btnSUCFilterAll").click(function(){
                $("input[name=fltSUC]").prop('checked', true);
            });

            $("#btnSUCFilterNone").click(function(){
                $("input[name=fltSUC]").prop('checked', false);
            });
        
            $("#btnSUCFilter").click(function(){
                arSUC=[];
                lyrSUC.refresh();
            });
            
        });
        
///////////////// REGIONES /////////////////
        
            function styleRegiones(json){
                var att = json.properties;
                switch (att.Region){
                    case 'Centro Oriente':
                        return {color:'#c300c9', opacity:0.3};
                        break;
                    case 'Centro Poniente':
                        return {color:'#0000d5', opacity:0.3};
                        break;
                    case 'Pacífico':
                        return {color:'#088600', opacity:0.3};
                        break;
                    case 'Norte':
                        return {color:'#00eaea', opacity:0.3};
                        break;
                    case 'Occidente':
                        return {color:'#ff5900', opacity:0.3};
                        break;
                    case 'Tierra Caliente':
                        return {color:'#eed60f', opacity:0.3};
                        break;
                    case 'Sur':
                        return {color:'#ed001d', opacity:0.3};
                        break;
                }
            }
            
            function filterRegiones(json){
                var att = json.properties;
                if (att.Region=='Sin Region') {
                    return false;
                } else {
                    var optFilter = $("input[name=fltRegiones]:checked").val();
                    if (optFilter=='ALL') {
                        return true;
                    } else {
                        return (att.Region==optFilter);
                    }
                }
            }
            
            $("input[name=fltRegiones]").click(function(){
                arRegiones = [];
                lyrRegiones.refresh();
            });

///////////////// SUBREGIONES /////////////////
        
            function styleSubregiones(json){
                var att = json.properties;
                switch (att.Subregion){
                    case 'Centro Oriente 1':
                        return {fillColor:'#e66dea', opacity:0.6, color:'gray'};
                        break;
                    case 'Centro Oriente 2':
                        return {fillColor:'#e300ea', opacity:0.6, color:'gray'};
                        break;
                    case 'Centro Poniente 1':
                        return {fillColor:'#0000d5', opacity:0.6, color:'gray'};
                        break;
                    case 'Centro Poniente 2':
                        return {fillColor:'#7878d5', opacity:0.6, color:'gray'};
                        break;
                    case 'Pacífico 1':
                        return {fillColor:'#088600', opacity:0.6, color:'gray'};
                        break;
                    case 'Norte 1':
                        return {fillColor:'#00d8d8', opacity:0.6, color:'gray'};
                        break;
                    case 'Norte 2':
                        return {fillColor:'#00ffff', opacity:0.6, color:'gray'};
                        break;
                    case 'Occidente 1':
                        return {fillColor:'#ff5900', opacity:0.6, color:'gray'};
                        break;
                    case 'Occidente 2':
                        return {fillColor:'#ff6d24', opacity:0.6, color:'gray'};
                        break;
                    case 'Occidente 3':
                        return {fillColor:'#ff9865', opacity:0.6, color:'gray'};
                        break;
                    case 'Tierra Caliente 1':
                        return {fillColor:'#eed60f', opacity:0.6, color:'gray'};
                        break;
                    case 'Tierra Caliente 2':
                        return {fillColor:'#eee281', opacity:0.6, color:'gray'};
                        break;
                    case 'Sur 1':
                        return {fillColor:'#c4001a', opacity:0.6, color:'gray'};
                        break;
                    case 'Sur 2':
                        return {fillColor:'#ff0d2d', opacity:0.6, color:'gray'};
                        break;
                    case 'Sur 3':
                        return {fillColor:'#ff576d', opacity:0.6, color:'gray'};
                        break;
                }
            }
            
            function filterSubregiones(json){
                var att = json.properties;
                if (att.Subregion=='Sin Subregion') {
                    return false;
                } else {
                    var optFilter = $("input[name=fltSubregiones]:checked").val();
                    if (optFilter=='ALL') {
                        return true;
                    } else {
                        return (att.Subregion==optFilter);
                    }
                }
            }
            
            $("input[name=fltSubregiones]").click(function(){
                arSubregiones = [];
                lyrSubregiones.refresh();
            });
        
        //****************** Buscador de PAX ***********************
        
            function LatLngToArrayString(ll) {
                return "["+ll.lat.toFixed(5)+", "+ll.lng.toFixed(5)+"]";
            }
        
           function returnLayerByAttribute (lyr,att,val){
                var arLayers = lyr.getLayers();
                for (i=0;i<arLayers.length-1;i++){
                    var ftrVal = arLayers[i].feature.properties[att];
                    if (ftrVal==val){
                        return arLayers[i];
                    }
                }
                return false;
            }
        
            function testLayerAttribute(ar, val, att, fg, err, btn) {
                if (ar.indexOf(val)<0) {
                    $(fg).addClass("has-error");
                    $(err).html("**** "+att+" no existe ****");
                    $(btn).attr("disabled", true);
                } else {
                    $(fg).removeClass("has-error");
                    $(err).html("");
                    $(btn).attr("disabled", false);
                }
            }

    </script>



<script type="text/javascript">
  
  const endpoint = 'datosProyectos.json';
    const cities = [];
    fetch(endpoint)
        .then(blob => blob.json())
        .then(data => cities.push(...data));
    function findMatches(wordToMatch, cities, geografia, tarea) {
        return cities.filter(place => {
            const regex = new RegExp(wordToMatch, 'gi');
            return place.NOMPRO.match(regex) &&  place.Territorio.match(geografia) &&  place.tipo.match(tarea) ;
        });
    }

    function displayMatches(e) {
        const matchedArray1 = findMatches(e.target.value, cities, 'Occidente', "Libre");   
        const matchedArray2 = findMatches(e.target.value, cities, 'Occidente', "Sin Terminar");
        
        const matchedArray3 = findMatches(e.target.value, cities, 'Norte', "Libre");   
        const matchedArray4 = findMatches(e.target.value, cities, 'Norte', "Sin Terminar");

        const matchedArray5 = findMatches(e.target.value, cities, 'Sur', "Libre");   
        const matchedArray6 = findMatches(e.target.value, cities, 'Sur', "Sin Terminar");
        
        const matchedArray7 = findMatches(valores, cities, 'Pacífico', "Libre");   
        const matchedArray8 = findMatches(valores, cities, 'Pacífico', "Sin Terminar");
        
        const matchedArray9 = findMatches(valores, cities, 'Centro Poniente', "Libre");   
        const matchedArray10 = findMatches(valores, cities, 'Centro Poniente', "Sin Terminar");
        
        const matchedArray11 = findMatches(valores, cities, 'Centro Oriente', "Libre");   
        const matchedArray12 = findMatches(valores, cities, 'Centro Oriente', "Sin Terminar");
        
        const matchedArray13 = findMatches(valores, cities, 'Tierra Caliente', "Libre");   
        const matchedArray14 = findMatches(valores, cities, 'Tierra Caliente', "Sin Terminar");


        const html =  
         `
        <table border="2"><tr><th bgcolor="#cdcdcd" colspan="3">
        <h2>Sucursales con Tareas Pendientes</h2></th></tr>
        <tr><th>Región</th><th>Libres</th>
        <th>Sin Terminar</th></tr> 
        <tr><td>Occidente</td>  <td> ${matchedArray1.length} </td><td>${matchedArray2.length}</td></tr>
        <tr><td>Norte</td><td>${matchedArray3.length}</td><td>${matchedArray4.length}</td></tr><tr>
        <td>Sur</td><td>${matchedArray5.length}</td><td>${matchedArray6.length}</td></tr>
        <td>Pacífico</td><td>${matchedArray7.length}</td><td>${matchedArray8.length}</td></tr>
        <td>Centro Poniente</td><td>${matchedArray9.length}</td><td>${matchedArray10.length}</td></tr>
        <td>Centro Oriente</td><td>${matchedArray11.length}</td><td>${matchedArray12.length}</td></tr>
        <td>Tierra Caliente</td><td>${matchedArray13.length}</td><td>${matchedArray14.length}</td></tr>
        <tr bgcolor="#c3c3c3"><td><b>TOTAL</td><td><b>${matchedArray1.length + matchedArray3.length + matchedArray5.length + matchedArray7.length + matchedArray9.length + matchedArray11.length + matchedArray13.length }</td><td><b>${matchedArray2.length + matchedArray4.length + matchedArray6.length + matchedArray8.length + matchedArray10.length + matchedArray12.length + matchedArray14.length }</td></tr>` ;
 const suggestions = document.querySelector('.suggestions');
        suggestions.innerHTML = html;
        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
}

    function displayMatches1(valores) {
        const matchedArray1 = findMatches(valores, cities, 'Occidente', "Libre");   
        const matchedArray2 = findMatches(valores, cities, 'Occidente', "Sin Terminar");
        
        const matchedArray3 = findMatches(valores, cities, 'Norte', "Libre");   
        const matchedArray4 = findMatches(valores, cities, 'Norte', "Sin Terminar");

        const matchedArray5 = findMatches(valores, cities, 'Sur', "Libre");   
        const matchedArray6 = findMatches(valores, cities, 'Sur', "Sin Terminar");
        
        const matchedArray7 = findMatches(valores, cities, 'Pacífico', "Libre");   
        const matchedArray8 = findMatches(valores, cities, 'Pacífico', "Sin Terminar");
        
        const matchedArray9 = findMatches(valores, cities, 'Centro Poniente', "Libre");   
        const matchedArray10 = findMatches(valores, cities, 'Centro Poniente', "Sin Terminar");
        
        const matchedArray11 = findMatches(valores, cities, 'Centro Oriente', "Libre");   
        const matchedArray12 = findMatches(valores, cities, 'Centro Oriente', "Sin Terminar");
        
        const matchedArray13 = findMatches(valores, cities, 'Tierra Caliente', "Libre");   
        const matchedArray14 = findMatches(valores, cities, 'Tierra Caliente', "Sin Terminar");

        const html =  
         `
        <table border="2"><tr><th bgcolor="#cdcdcd" colspan="3">
        <h2>Sucursales con Tareas Pendientes</h2></th></tr>
        <tr><th>Región</th><th>Libres</th>
        <th>Sin Terminar</th></tr> 
        <tr><td>Occidente</td>  <td> ${matchedArray1.length} </td><td>${matchedArray2.length}</td></tr>
        <tr><td>Norte</td><td>${matchedArray3.length}</td><td>${matchedArray4.length}</td></tr><tr>
        <td>Sur</td><td>${matchedArray5.length}</td><td>${matchedArray6.length}</td></tr>
        <td>Pacífico</td><td>${matchedArray7.length}</td><td>${matchedArray8.length}</td></tr>
        <td>Centro Poniente</td><td>${matchedArray9.length}</td><td>${matchedArray10.length}</td></tr>
        <td>Centro Oriente</td><td>${matchedArray11.length}</td><td>${matchedArray12.length}</td></tr>
        <td>Tierra Caliente</td><td>${matchedArray13.length}</td><td>${matchedArray14.length}</td></tr>

        <tr bgcolor="#c3c3c3"><td><b>TOTAL</td><td><b>${matchedArray1.length + matchedArray3.length + matchedArray5.length + matchedArray7.length + matchedArray9.length + matchedArray11.length + matchedArray13.length }</td><td><b>${matchedArray2.length + matchedArray4.length + matchedArray6.length + matchedArray8.length + matchedArray10.length + matchedArray12.length + matchedArray14.length}</td></tr>` ;
 const suggestions = document.querySelector('.suggestions');
        suggestions.innerHTML = html;
        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
}


function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
const regex = new RegExp(val, 'gi');
        if (arr[i].match(regex)) {
          b = document.createElement("DIV");
          b.innerHTML = arr[i].substr(0, val.length);
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
//  /execute a function presses a key on the keyboard:/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { //up
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
//  /execute a function when someone clicks in the document:/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });

document.getElementById("miBoton").addEventListener("click", function (e) {
      displayMatches1(document.getElementById("myInput").value);
  });

}

/*An array containing all the country names in the world:*/
var countries = ["En Abril Upaxer te regala gasolina 2020","Durante ABRIL recorre los pasillos de un Minisuper y gana dinero","En abril descubre cuánto vale tu prenda de oro","Gana dinero pidiendo información de un producto del banco_1","Gana dinero pidiendo información de un crédito del banco_1","Haz un trámite en la caja del banco y gana dinero_1","En Marzo con UPAXER activar TOMIIN te hace ganar","Durante Abril pregunta sobre Créditos Personales","Programa de Certificación Azteca Servicios","Programa de Certificación Azteca Comercializadores","En abril descubre cuánto vale tu prenda de oro CDMX","Pide un préstamo de 3000 en la CDMX a 12 meses","Mystery Shopper experiencia competencia regional Préstamos Personales 3ra vuelta","Este 2020 da seguimiento a tu Crédito Personal en una tienda departamental"];


</script>

</body>
</html>