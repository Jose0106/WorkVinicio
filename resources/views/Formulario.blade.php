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

            span.sname{
                position: relative;
                left: -140px;
                top: -30px;
                width: 140px;
                padding: 6px;
                background: #E00;
                color: #FFF;
                text-aling: center;
                visibility: hidden;
                border-radius: 5px;
                opacity: 0.8;
                z-index: 999;
            }

            span.sname:after{
                content:'';
                position: absolute;
                top: 100%;
                left: 50%;
                margin-left: -8px;
                width: 0;
                height: 0;
                border-top: 8px solid #E00;
                border-right: 8px solid transparent;
                border-left: 8px solid transparent;
            }
        </style>
        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>

 

        <script type="text/javascript"> 
            $(document).ready(function(){
                $("#nombre").keyup(function(){
                    var txtname = $("#nombre").val();
                    var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                    if(formato.test(txtname)){
                        $("span.sname").css({   "visibility"  : "hidden"  });
                        }
                    else{ 
                        $("span.sname").css({   "visibility"  : "visible"  });
                        }
                });
            //----------------------------------------------------------------
                    $("#app").keyup(function(){
                    var txtapp = $("#app").val();
                    var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                    if(formato.test(txtapp)){
                        $("#sapp").text("Es correcto!!!");
                    }
                    else{
                        $("#sapp").text("Error!!");
                    }
                });
            //---------------------------------------------------------------
                    $("#apm").keyup(function(){
                    var txtapm = $("#apm").val();
                    var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                    if(formato.test(txtapm)){
                        $("#apm").css({ "border": "1px solid #0F0"}).fadeIn(2000);
                    }
                    else{
                        $("#apm").css({ "bordeer": "1px solid #F00"}).fadeIn(2000);
                    }
            });
            //---------------------------------------------------------------

                    $("#fn").blur(function(){
                        var f = new Date();
                        var year = f.getFullYear();
                        var month = f.getMonth();
                        var day = f.getDate();

                        var fecha = $("#fn").val();

                        if(fecha != ''){
                            var fecha2 = fecha.split("-");

                            var edad = year - fecha2[0];
                            
                            if(edad > 17){  
                                $("#sfecha").text("eres mayor de edad con:" +edad); 
                                }
                            else{ 
                                $("#sfecha").text("Eres menor de edad con:" + edad);
                                }
                        }
                        else{$("#sfecha").text("Indiquie una fecha");}
                    });
            //---------------------------------------------------------------
                    $("#mail").blur(function(){
                        var txtmail = $("#mail").val();
                        var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i; 

                        if(valmail.test(txtmail)){
                            $("#smail").text("Valido");
                        }
                        else{
                            $("#smail").text("incorrecto");
                        }

                    });   
            //---------------------------------------------------------------
                    $("#pass1").keyup(function(){
                        
                        
                        
                    });
            //---------------------------------------------------------------
                    $("#pass2").keyup(function(){
                        var txtpass1 = $("#pass1").val();
                        var txtpass2 = $("#pass2").val();
                        if(txtpass1 == txtpass2){ 
                            $("#spass2").text("Correcto");
                            $("#spass2").css({ "border":"1px solid #0F0"}).fadeIn(2000);
                        }
                        else{
                            $("#spass2").text("Incorrecto");
                            $("#spass2").css({ "border":"1px solid #F00"}).fadeIn(2000);
                        }
                    });
            //---------------------------------------------------------------  
                   /* $("#guardar").prop("disabled", true);*/
            //---------------------------------------------------------------
            //---------------------------------------------------------------
                    /*const $input = document.querySelector("#evaluacion");
                    const patron = /[0-9a-zA-Z_@]+/;

                    $input.addEventListener("Keydown", event =>{
                        console.log(event.key);
                        if(patron.test(event.key)){
                            $("#evaluacion").css({ "border": "1px solid #0C0"});
                        }
                        else{
                            if(event.KeyCode==8){
                                console.log("backspace");
                            }
                            else{ 
                                event.preventDefault();
                                }
                        }
                    });*/
            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <h2> Laravel-jquery: Formulario </h2>
                <hr>
                <center>
                  <form action="" name="">
                  <table>
                    <tr>
                      <td> Nombre: </td>
                      <td><input type="text" id="nombre" class="nombre" name="nombre"></td>
                      <td><span id="sname" class="sname">Error: en el nombre</span></td>
                    </tr>
                    <tr>
                      <td> Ap. Paterno: </td>
                      <td><input type="text" id="app" class="app" name="app"></td>
                      <td><span id="sapp" class="sapp"></span></td>
                    </tr>
                    <tr>
                      <td> Ap. Materno:: </td>
                      <td><input type="text" id="apm" class="apm" name="apm"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td> E-mail: </td>
                      <td><input type="text" id="mail" class="mail" name="mail"></td>
                      <td><span id="smail" class="smail"></span></td>
                    </tr>
                    <tr>
                      <td> Fecha de Nacimiento: </td>
                      <td><input type="text" id="fn" class="fn" name="fn"></td>
                      <td><span id="sfecha" class="sfecha"></span></td>
                    </tr>
                    <tr>
                      <td> Password: </td>
                      <td><input type="password" id="pass1" class="pass1" name="pass1"></td>
                      <td><span id="spass1" class="spass1"></span></td>
                    </tr>
                    <tr>
                      <td> Confirmar Password: </td>
                      <td><input type="password" id="pass2" class="pass2" name="pass2"></td>
                      <td><span id="spass2" class="spass2"></span></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                        <input type="submit" id="guardar" class="guardar" name="guardar" value="guardar">
                        </td>
                    </tr>
                  </table>
                  </form> 
                  <hr><hr>

                  <h4>Evaluacion 4 (Impide escritura):</h4>
                  <input type="text" id="evaluacion">
                  <br><br>

                </center>

                <div class="links">
                    <a href="{{ route ('inicio') }}"> Regresar</a><br>
                    <a> José de Jesús Farfán Ostio </a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
