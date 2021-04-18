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

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
   
            <h2> Examen de javascript</h2>
            <hr>
            
                  <img width="380" height="200" src="images/cartel.jpg" alt="Mega tienda Online" >

             
            

                <p>--------Venta de productos--------</p>

                <select id="empleados" onchange="selectempleado">
                <option value="">--Selecciona un empleado--</option>
                <option value="emp1">Yessenia Neri Hipolito</option>
                <option value="emp2">Homero Andrade Ostio</option>
                </select>
                <br></br>
                <span id="empselect"></span>

                <script>src="examen_evento_onchange_empleado.js"</script>
               

                <br></br>
                <select id="productos">
                <option value="0">--Selecciona un producto--</option>
                <option value="1">Cafe Los Portakes</option>
                <option value="2">Vitamina C-Boost</option>
                </select>
                <br></br>
                <td> Cantidad:
                <input type="text" name="cantidad" id="cantidad">
                </td>
                <br></br>
                <p>--------Total a Pagar--------</p>
                <br></br>
               
                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
        
        /* var selector = document.getElementById("comidas");
        var elemento = document.createElement("option");
        var objeto = document.getElementsByTagName("option")[0];
          selector.insertBefore(elemento,objeto);
          elemento.serAttribute('value', "sopa");
          elemento.textContext = "SOPA";      
          $(document).ready(funciton(){

              $('#empleados').on('change',function() {
                  
                  var selectemp = '#' +$(this).val();

                  $('#emp').children('div').hiden();
                  $('#emp').children(selectemp).show();
              });

          });*/  

          
    
        </script> 
        
    </body>
</html>
