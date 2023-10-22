<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //ayuda
    "de que es la pagina?" => "es un eecomers donde vendemos joyeria.",
    "como puedo comprar?" => "para comprar debe crearse (registrarse) una cuenta en nuestra pagina web aqui mismo  .",
    "como me puedo crear una cuenta?" => "arriba hay una seccion de registro ",
   //con mayusculas
    "¿De que es la pagian?" => "es un eecomers donde vendemos joyeria.",
    "¿Como puedo comprar?" => "para comprar debe crearse (registrarse) una cuenta en nuestra pagina web aqui mismo  .",
    "¿Como me puedo crear una cuenta?" => "arriba hay una seccion de registro ",
   
   
    //ayuda2
    "es seguro la compra?" =>"si contamos con un sistema de peypal este es muy seguro para las compras.",
    "que mas ofrecen?" =>"solo joyeria por el momento.",
    

//CON MAYUSCULAS
"¿Es seguro la compra?" =>"si contamos con un sistema de peypal este es muy seguro para las compras.",
"¿Que mas ofrecen?" =>"solo joyeria por el momento.",


       
    //name
    "como te llamas?" =>"Soy ayudante virtual de la pagina web  y estoy para servirte",
    "cual es tu nombre?" =>"Soy scarlet y estoy para servirte",
    "tienes nombre?" =>"Soy scarlet y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ",
    "see you" =>"see you lader ",
    //
    "what is your name?" =>" my name is scarlet",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con la pagina.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
