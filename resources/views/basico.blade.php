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
                 console.log("Pagina de funcion de consola..");
                 document.write("Escrito del script de Jose");
 /*
                 if(confirm("Presione Aceptar o Cancelar")){
                     document.write("SI");
                 }
                 else(
                     document.write("NO");
                 )
                 
                 var: variables de funcion
                 let: variable de bloque 
                 const: variable contante
                */

                 var x;
                 var nombre = "Jesús";
                 var edad = 19;
                 var estatura = 1.76;
                 var estatura2 = estatura*estatura;
                 var peso = 80;
                 var imc = peso/estatura2;
                 var lista = ['jair','jason','martin'];

                 var res1 = 2+5;
                 var res2 = edad-res1;

                 var y = 1;
/*
                 for(x=0; x<=10; x++){
                     console.log("for:" + x);
                 }  

                 while(y<=10){
                     y++;
                    console.log("while:" + y);
                 }

                 do{
                    console.log("do:" + y);
                    y++;
                    }while(y<=10);
*/
                for(z in lista){
                    console.log(lista[z]);
                }   
                // ------------------------------

                function cambio(){
                    var info = "2001 06";
                    document.getElementById("num1").value = info;
                    document.getElementsByClassName("num2")[0].innerHTML = "2001 08"
                    document.getElementsByName("num3")[0].innerHTML = "2001 11"
                }

                var dato = prompt("Indica un valor:");
                   alert(dato+10);

        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <h2> Laravel-javacript </h2>

                <input type="text" id="num1"><br>
                <div class="num2"></div><br>
                <textarea name="num3"></textarea><br>
                <br>
                <button onclick="cambio()"> Cambio de informacion </button>

                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
