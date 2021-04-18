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
         
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <h2> Laravel-javacript </h2>
                <hr>

                <center>
                  contraseña: <input type="text" id="pass1" onkeyup="evaluar(this);">
                  <b id="nivel"></b><br>
                  <b id="error"></b><br>
                  confirmacion: <input type="text" id="pass2">
                  <br>
                  <button onclick="evaluar1()">Evaluar</button>
                </center>

                

                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
        <script type="text/javascript"> 
              function evaluar(obj){
               var pass = obj.value;
               var conteo = obj.value.length;
               var cadena = pass.split("");
               var cont = 0;
               var let_a = 0;
               var let_b = 0;
               var let_c = 0;
               var let_d = 0;
               if (conteo > 3){
                   if(cadena[0].search(/[A-Z]/g)+1 >0){
                       let_a = 0;
                       let_b = 0;
                       let_c = 0;
                       let_d = 0;
                       //---------------evaluar caracter x caracter------------
                       for(var i=0; i < cadena.length; i++){
                           var letra = cadena[i];
                           if(letra.search(/[a-z]/g)+1 > 0){ let_a = let_a+1; }
                            else{
                                if(letra.search(/[A-Z]/g)+1 > 0){ let_b = let_b+1; }
                                else{
                                    if(letra.search(/[0-9]/g)+1 > 0){ let_c = let_c+1; }
                                    else{ 
                                        if(letra.search(/[@.-_#]/g)+1 > 0){ let_d = let_d+1; }
                                    else { cont = cont+1; }
                                     }

                                }
                            }
                            
                       }
                       //-----------Evaluar cantidad de caracteres---------------
                       if(conteo >= 8){
                        document.getElementById("nivel").style.cssText = 'color: #FFF; background-color: #0D8E1A;';
                        document.getElementById("nivel").innerHTML = "SEGURA ";
                       }
                       else{
                           if (conteo >= 6){
                        document.getElementById("nivel").style.cssText = 'color: #FFF; background-color: #EFDD0F;';
                        document.getElementById("nivel").innerHTML = "POCO SEGURA ";
                           }
                           else{
                        document.getElementById("nivel").style.cssText = 'color: #FFF; background-color: #F00;';
                        document.getElementById("nivel").innerHTML = "INSEGURA ";
                           }
                       }

                       //---------------------indicar errores : si existen letras y numeros-------
                       if(let_a < 1 || let_b < 1 || let_c < 1 ){
                           if(let_a < 1){ let_a ="una letra minuscula ,"; } else{ let_a = " "; }
                           if(let_b < 1){ let_b ="una letra mayuscula ,"; } else{ let_b = " "; }
                           if(let_c < 1){ let_c ="un numero y ,"; } else{ let_c = " "; }
                           if(let_d < 1){ let_d ="caracter especial,"; } else{ let_d = " "; }
                           document.getElementById("error").innerHTML = "Error: la contraseña debde de contener al menos:" + let_a + let_b + let_c + let_d ;
                       }
                       else{
                        document.getElementById("error").innerHTML = " ";
                       }
                       //----------------------------indica errores: si existen caracteres especiales----------------
                       /*if(cont > 0){
                        document.getElementById("error").innerHTML = "Error: la contraseña solo debe de contener letras y numeros ";
                        document.getElementById("pass1").style.cssText = 'color: #F00; border: solid 1px #F00';
                        document.getElementById("nivel").innerHTML = " ";
                       }
                       else{
                        document.getElementById("pass1").style.cssText = 'color: #000; border: solid 1px #000';
                       } */
                   }
                   else{
                    document.getElementById("pass1").style.cssText = 'color: #F00; border: solid 1px #F00';
                    document.getElementById("nivel").style.cssText = 'border-style: none;';
                    document.getElementById("nivel").innerHTML = " ";
                    document.getElementById("error").innerHTML = "Error el primer caracter debe de ser una letra mayuscula";
                   }
               }
               else{
                    document.getElementById("pass1").style.cssText = 'color: #000; border: solid 1px #000';
                    document.getElementById("nivel").innerHTML = " ";
                    document.getElementById("error").innerHTML = " ";
               }
           }
           function evaluar1(){
                    var pass1 = document.getElementById('pass1').value;
                    var pass2 = document.getElementById('pass2').value;

                    if (pass1 == pass2){
                        alert('Correcto bro ');
                    }

                    else{
                        alert('Incorrecto bro');
                    }

                }
           
          
        </script>
    </body>
</html>
