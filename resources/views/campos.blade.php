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
                

                <h2 id="colores">Cambios de Colores</h2>
                <button onclick="document.getElementById('colores').style.color = 'red'">rojo</button>
                <button onclick="document.getElementById('colores').style.border = 'purple'">verde</button>
                <button onclick="document.getElementById('colores').style.cssText = 'color: #0000ff; border: solid 3px #0000ff'">azul</button>
                <button onclick="document.getElementById('colores').style.color = 'color:  #0000ff'">rosa</button>
                <button onclick="document.getElementById('colores').style.color = 'orange'">naranja</button>
                <!--  ---------->
               
                


                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
        
        var selector = document.getElementById("comidas");
        var elemento = document.createElement("option");
        var objeto = document.getElementsByTagName("option")[0];
          selector.insertBefore(elemento,objeto);
          elemento.serAttribute('value', "sopa");
          elemento.textContext = "SOPA";        
    
        </script> 
        
    </body>
</html>
