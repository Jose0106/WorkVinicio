<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel javascript farfan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>

 

        <script type="text/javascript"> 
            $(document).ready(function(){
                console.log("Salida de informacion a consola");
                $("#porid").html("Cambiame de color :c");
                

                $("#porid").css({
                    "position" : "center",
                    "background-color" : "#FFA07A",
                    "font-size" : "200%",
                    "height" : "100px",
                    "width" : "150px"
                });
              
                 $("#mostrar1").click(function(){
                     $("#porid").animate({
                           backgroundColor: "#CC0000",
                           color: "#FFF"
                     });

                 });

                 $("#mostrar2").click(function(){
                     $("#porid").animate({
                           backgroundColor: "#00FF00",
                           color: "#FFF"
                     });

                 });
                 $("#mostrar3").click(function(){
                     $("#porid").animate({
                           backgroundColor: "#CC0099",
                           color: "#FFF"
                     });

                 });
                 $("#mostrar4").click(function(){
                     $("#porid").animate({
                           backgroundColor: "#000066",
                           color: "#FFF"
                     });

                 });
                 $("#mostrar5").click(function(){
                     $("#porid").animate({
                           backgroundColor: "#003300",
                           color: "#FFF"
                     });

                 });

            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <h2> Laravel-jquery </h2>
                <hr>


                <center>
                  <div id="porid"> Campo 01 </div>      
                  <br></br>
                  
                  <button id="mostrar1">Color 1</button>
                  <button id="mostrar2">Color 2</button>
                  <button id="mostrar3">Color 3</button>
                  <button id="mostrar4">Color 4</button>
                  <button id="mostrar5">Color 5</button>


                  <br></br>
                  
             
                
                </center>

                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
