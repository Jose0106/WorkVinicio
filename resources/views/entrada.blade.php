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
                 $("#email").keyup(function () {
                    var valemail = $ $("#email").val();
                    if (valemail != ''){
                        //console.log(valemail);
                        $("#info").load('js00?email=' + valemail);
                    } 
                    else{
                        $("img").attr("src","img/shadow.png");
                        console.log("------Sin datos----");
                    }
                 });

             });
         
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <h2> Laravel-Jquery: login</h2>
                <hr>
                <center>
                <form action="" name="">
                <table>
                  <tr>
                    <td colspan="2">
                         <img src="{{ asset('img/shadow.png')}}" id="img" width="140" height="140" alt="imagen">
                    </td>
                  </tr>
                  <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email" id="email" class="email"></td>
                  </tr>
                  <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass" id="pass" class="pass"></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                       <input type="submit" name="ingresar" id="ingresar" class="ingresar">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <hr><hr>
                      <div id="info">-----------------</div>
                    </td>
                    
                  </tr>
                  
                </table>
                </form>
                
                
                </center>

                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
