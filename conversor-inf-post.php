<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            body{
                background: black;
            }
             .section {
                background: transparent;
                color: yellow;
                border-radius: 1em;
                padding: 1em;
                position: absolute;
                top: 100%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%) }
        </style>
        
        
         <script lang="">
             
                function Convertir() {
                    
                    var expresion = document.getElementById('expresion');
                    var listaEntrada = expresion.value.toString().split(' ').reverse();
                    var pila = new Array();
                    var listaSalida = '';
                    
                    var error = true;
                    while (!error && listaEntrada.length > 0) {
                        var termino = listaEntrada.pop();
                        
                    }
                    // Caso cuando el termino es una VARIABLE
                        if (esVariable(termino)) {
                            listaSalida += termino + ' ';
                        } 
    }
       
       
       </script>   
       
    </head>
    
</html>