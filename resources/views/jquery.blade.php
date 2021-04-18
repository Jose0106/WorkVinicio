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
                $("#porid").html("Campo por id");
                $(".porclase").html("Campo por clase");
                $("span").text("Campo por objeto|tag-html");
                $("span#texto").text("Campo especifico de un tag.html");

                //--------------------------------------------------------------

                $("#porid").css({
                    "position" : "absolute",
                    "background-color" : "#FFA07A",
                    "font-size" : "200%",
                    "height" : "100px",
                    "width" : "100px"
                });
                //---------------------------------------------------------------
                num1 = 10;
                num2 = 100;
                nombre = "farfan";

                for(x=0; x<10; x++){
                    console.log(x+1+ "dato");
                }
                if(num1 != num2){
                    alert(num1+num2);
                }
                //---------------------------------------------------------------

                $("#calcular").click(function(e){
                    e.preventDefault();
                    var num1 = $('#num1').val();
                    var num2 = $('#num2').val();
                       var res = parseFloat(num1)+parseFloat(num2);
                       //alert(res);
                       $('#calcular').html(res);
                });
                //---------------------------------------------------------------

                $("#mostrar1").click(function(){
                    if($("#porid").is(":hidden")){
                        $("#porid").show(500);
                        $("#mostrar1").html("ocultar");
                    }
                    else{
                        $("#porid").hide(500);
                        $("#mostrar1").html("mostrar");
                    }
                });
                 //---------------------------------------------------------------
                 $("#mostrar2").click(function(){
                     $("#porid").animate({
                           backgroundColor: "#08C",
                           color: "#FFF"
                     });

                 });
                 //---------------------------------------------------------------

                 $("#mostrar3").click(function(){
                    if($("#porid").position().left > 0){
                        $("#porid").animate({ left: '0px' }, 700);
                        $("#mostrar3").html("Derecha");
                    }
                    else{
                        $("#porid").animate({ left: '250px' }, 700);
                        $("#mostrar3").html("Izquierda");
                    }
                });
                 //---------------------------------------------------------------
                 $("#btn1").click(function(){
                     $("p").append("<i>-- Texto Extra --- <i>");
                 });
                 $("#btn2").click(function(){
                     $("ol").append("<i>-- Lista Extra --- <i>");
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
                  <div class="porclase"> Campo 02 </div>
                  <span> Campo 03 </span><br>
                  <span id="texto">Campo 04</span><br>
                  <span> Campo 05 </span><br>
                  <samp id="texto">Campo 06</samp>
                  <br><hr>

                  Primer valor: <input type="text" id="num1"><br>
                  Segundo valor: <input type="text" id="num2"><br>
                  <button id="calcular">Calcular</button><br>
                  <br><hr>

                  <button id="mostrar1"> Mostrar 1</button>
                  <p id="mostrar1"> Mostrar 2</p>
                  <i id="mostrar1"> Mostrar 3</i>
                  <hr>
                  <button id="mostrar2">Color</button>
                  <button id="mostrar3">Mover</button>
                  <br><hr>
                  <p>Tag de tipo de parrafo|p No.1</p>
                  <p id="parrafo">Tag de tipo de parrafo|p No.2</p>
                  <ol>
                   <li>Lista - Elemento 1</li>
                   <li>Lista - Elemento 2</li>
                   <li>Lista - Elemento 3</li>
                  </ol>
                  <button id="btn1">Adjuntar texto al parrafo</button>
                  <button id="btn2">Adjuntar elemento a la lista</button>
                  <br><br>
                  <hr>
                
                
                </center>

                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
