<?php 
    session_start();
    if (!isset($_SESSION['jaentrou'])){
        $_SESSION['usuario'] = 'nenhum';
        $_SESSION['jaentrou'] = 1;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLOPPY ARCH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="img/diskmenu.png"png/png">
    <link rel="stylesheet" type="text/css" href="menuteste.css">
    <link rel="stylesheet" type="text/js" href="menuteste.js">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://fonts.cdnfonts.com/css/aux-dotbitc" rel="stylesheet">
                
<style>
    /*https://animate.style/ site das animações*/
</style>
</head>
<body style="background-image: url(img/Fundo.png);">

    <img src="img/planeta gif.gif" class="planeta">
    <img src="img/planeta gif.gif" class="planeta2">
    <img src="img/disquete gif.gif" class="disquete" style="width: 20%; height: 40%;">
    <img src="img/disquete gif.gif" class="disquete2"style="width: 20%; height: 40%;">

    

        <div  class="texto1" > 
            <h3>
                 <font style="font-size: 100%;font-family: 'AuX DotBitC Xtra SmallCaps', sans-serif; color: yellow;"> Um produto que visa  a <p>nostalgia juntamente a </p></font>
            </h3>
                <h3> 
                    <font style="font-size: 100%;font-family: 'AuX DotBitC Xtra SmallCaps', sans-serif; color: yellow;"> viabilidade de<P> armazenamento em seu  sistema, com </P><P>isso em mente</P>  </font>  
                </h3>
                    <h3> 
                        <font style="font-size: 100%;font-family: 'AuX DotBitC Xtra SmallCaps', sans-serif; color: yellow;"> apresentamos uma nova <p> geracaso de disquetes.</p></font>   
                    </h3>
        </div>

        <div class="titulo">
          
              <img src="img/titulo.png" alt="Título">
        
          </div>
          
          
        <div class="discneymar">
            <img src="img/Neymar disc.png" alt="150px">
        </div>

        <div class="titulo2">
            <img src="img/titulo 2.png" alt="150px">
        </div>

        <div id class="titulo2">
            <img src="img/titulo 2.png" alt="150px">
        </div>
 
        <img src="img/diskmenu.png" alt="Menu" id="menu-botao" class="menu-image">

<ul id="menu">
    <li class="menu-item"><a href="FLOPPY ARCH comprar.html">comprar</a></li>
    <li class="menu-item"><a href="FLOPPY ARCH carrinho.html">carrinho</a></li>
    <li class="menu-item"><a href="FLOPPY ARCH.php">Inicio</a></li>
    <li class="menu-item"><a href="FLOPPY ARCH entrar.html">entrar</a></li>
<li class="menu-item"><a href="FLOPPY ARCH contato.html">contato</a></li>
 </ul>
  
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="menuteste.js"></script>
</html>   

