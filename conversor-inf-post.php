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
                    // Caso cuando el termino es NÚMERO
                        var numero = parseFloat(termino);
                        if (!isNaN(numero)) {
                            listaSalida += numero + ' ';
                        }
                    // Caso cuando el termino es una VARIABLE
                        if (esVariable(termino)) {
                            listaSalida += termino + ' ';
                        } 
                    // Caso cuando el termino es parentesis izquierdo
                        if (termino === '(') {
                            pila.push(termino);
                            listaSalida += termino + ' ';
                        }
                        if (termino === ')') {
                            while (pila.length > 0  && pila.length != '(' ) {
                                pila.pop();
                                listaSalida += termino + ' ';
                                if (pila.length === '(') {
                                    pila.pop();
                                } else {
                                    !error;
                                }
                                termino = [];                                
                            }
                        }
                        if (esOperador(termino)) {
                           while (pila.length > 0) {
                                pila.pop();
                                listaSalida += termino + ' ';
                            }
                            pila.push(termino);
                        }
                    }
                    while (pila.length > 0) {
                        pila.pop();
                        listaSalida += listaSalida + ' ';
                    }
                    pila  = [];
                    console.log(listaSalida);
                
                
                function esVariable(termino) {
                    var patt = new RegExp("[a-z]{1}");
                    return patt.test(termino);
                }
                function esOperador(termino) {
                    switch (termino) {
                        case '+':
                        case '*':
                        case '-':
                        case '/':
                        case '^':
                            return true;
                        default:
                            return false;
                    }
                }

         </script>
        </head>
        <body>
            <input type="text" id="expresion"/>
        <button onclick="Convertir()">Convertir</button>

        <p class="section" id="etiqueta"></p>
    </body>
</html>
       
       
       </script>   
       
    </head>
    
</html>
