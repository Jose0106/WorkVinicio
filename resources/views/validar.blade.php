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
               
                margin: 0;
            }

            .full-height {
               
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

                <center>
                  <h4>Evaluar 1</h4><br>
                  <input type="text" required pattern="[a-z\/]+">

                  <h4>Evaluar 2</h4><br>
                  <input type="text" onkeyup="validar1(this);" id="pass1">

                  <h4>Evaluar 3</h4><br>
                  <input type="text" onkeyup="validar2(this);" id="pass2"><br>
                  <p id="mostrar">-----</p><br>
                  <p id="error">-----</p>

                </center>

                <br><br>
                <hr>
                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
            <script type="text/javascript">

            function valaidar1(obj){
                var pass = obj.value;
                if(pass.search(/[a-z]/i) < 0){
                    alert("Error: la contraseña no contiene letras !!!!");
                }
                else {
                    alert("Error: la contraseña contiene letras !!!!");
                }
            }

            //-------------------------------------------------------

            function valaidar2(obj){
                var pass = obj.value;
                var cadena = pass.split("");
                var cont = 0;
            //-------------------------------------------------------
                for(var i=0; i < cadena.length; i++){
                    document.getElementById('mostrar').innerHTML = cadena[i].search(/[a-z]/g);
                }
            //-------------------------------------------------------
                if(pass.search(/[A-Z]/g)+1 > 0){
                    if(pass.search(/[a-zA-Z0-9]/g) >= 0){
                          for(var i=0; i < cadena.lenth; i++){
                            var letra = cadena[i];
                            if(letra.search(/[a-zA-Z0-9]/g) >=0){ cont = cont+0; }
                            else { cont = cont+1; }
                      }
                      document.getElemetById("pass2").style.cssText = 'color: #0F0; border: solid 1px #0F0';
                      document.getElemetById("Error").innerHTML = "-+-+-+-+";
                    }
                    else{
                        document.getElemetById("pass2").style.cssText = 'color: #F00; border: solid 1px #F00';
                        document.getElemetById("Error").innerHTML = "Error: La contraseña debe de contener letras y numeros";
                    }
                }
                else{
                    document.getElemetById("pass2").style.cssText = 'color: #F00; border: solid 1px #F00';
                    document.getElemetById("Error").innerHTML = "Error: el primer caracter debe de ser una letra mayuscula";
                }
                if (cont > 0){
                    document.getElemetById("pass2").style.cssText = 'color: #F00; border: solid 1px #F00';
                    document.getElemetById("Error").innerHTML = "Error: La contraseña debe de contener letras y numeros" + cont;
                }
                }
            </script>
    </body>
</html>
