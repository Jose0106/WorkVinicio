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
        <script type="text/javascript"> 
                
                function evaluar(){
                    var pass1 = document.getElementById('pass1').value;
                    var pass2 = document.getElementById('pass2').value;

                    if (pass1 == pass2){
                        alert('correcto');
                    }

                    else{
                        alert('incorrecto');
                    }

                }

        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <h2> Laravel-javacript </h2>
                <hr>
                    Contraseña: <input type="text" id="pass1" onkeyup="cantidad1(this);">
                    <b id="cant">----</b> 
                    <b id="seg">----</b>
                    <br>
                    Confirmar: <input type="text" id="pass2" onkeyup="cantidad2(this);">
                    <b id="correcto"> Correcto </b>
                    <br>
                    <button onclick="evaluar()">Evaluar</button>

               

                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
            <script type="text/javascript">
             document.getElementById("correcto").style.visibility = 'hidden';

             function cantidad1(obj){
                 var conteo = obj.value.length;
                 document.getElementById("cant").innerHTML = conteo;
                 if (conteo >=8){
                     document.getElementById("pass1").style.cssText= 'color: #00FF00; border: solid 1px #00FF00';
                     document.getElementById("seg").innerHTML = "segura";              
                }
                else{
                      if (conteo >=6){
                    document.getElementById("pass1").style.cssText= 'color: #FF0099	; border: solid 1px #FF0099';
                    document.getElementById("seg").innerHTML = "medio segura";  
                      }
                      else{
                        document.getElementById("pass1").style.cssText= 'color: #FF0000; border: solid 1px #FF0000';
                    document.getElementById("seg").innerHTML = "insegura"; 
                      }
                }
             }
             function cantidad2(obj){ 
                var pass1 = document.getElementById('pass1').value;
                var pass2 = document.getElementById('pass2').value;
                if (pass1 == pass2){
                    document.getElementById("correcto").style.visibility = 'visible';
                }
                else{
                    document.getElementById("correcto").style.visibility = 'hidden';
                }

             }
        
            </script>
    </body>
</html>
