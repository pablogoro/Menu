<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    
</head>
<?php
if (file_exists('./xml/menú.xml')) {
 $menu = simplexml_load_file('./xml/menú.xml');
                
}else {
  exit('Error abriendo test.xml.');
}
?>
<body>
    <div id="flipbook">
        <div >
           <h1 class="portada tituloPortada">SABOR DEL VINICUMA</h1>
           <h2 class="portada segundoTituloPortada"> DISFRUTA DE COMIDA CASERA</h2>
           <h1 class="ano">SINCE 1981</h1>
           <H1 class="info">C/Mira Brises  34  La Pineda</H1>
           <h2 class="telf">626 017 433</h2>
        </div>
        <div> <h1 class="tituloPagina">ENSALADAS</h1>
            <div class="texto">
            <?php
                
                foreach ($menu->plato as $plato) {
                    if($plato['tipo']=="Ensaladas"){
                        
                    echo "<span class='tituloPlato'>".$plato->nombre."</span>";
                    echo "<span class=precio>$plato->precio</span>";    
                    echo "<div class=item>";
                        foreach ($plato->caracteristcias->item as $item){
                            echo "<img src=".$item.">";
                        }       
                    echo "</div>";
                    echo "<span class='descripcion'>".$plato->caracteristicas."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->descripcion."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->calorias."</span>";
                    echo "<br>";
                    echo "<br>";
                    }
                    
                }
                
                ?>
                </div>
        </div>
        <div>
            <h1 class="tituloPagina">PASTA</h1>
            <div class="texto">
            <?php
                
                foreach ($menu->plato as $plato) {
                    if($plato['tipo']=="Pastas"){
                        
                    echo "<span class='tituloPlato'>".$plato->nombre."</span>";
                    echo "<span class=precio>$plato->precio</span>";
                    echo "<div class=item>";
                    foreach ($plato->caracteristcias->item as $item){
                        echo "<img src=".$item.">";
                    }
                    echo "</div>";
                    echo "<span class='descripcion'>".$plato->caracteristicas."</span>";
                    
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->descripcion."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->calorias."</span>";
                    echo "<br>";
                    echo "<br>";
                    }
                    
                }
                
                ?>
            </div>
        </div>
        <div>
            <h1 class="tituloPagina" >PIZZA</h1>
            <div class="texto">
            <?php
                
                foreach ($menu->plato as $plato) {
                    if($plato['tipo']=="Pizzas"){
                        
                    echo "<span class='tituloPlato'>".$plato->nombre."</span>";
                    echo "<span class=precio>$plato->precio</span>";
                    echo "<div class=item>";
                        foreach ($plato->caracteristcias->item as $item){
                            echo "<img src=".$item.">";
                        }
                    echo "</div>";
                    echo "<span class='descripcion'>".$plato->caracteristicas."</span>";
                    echo "<br>";
                    
                    echo "<span class='descripcion'>".$plato->descripcion."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->calorias."</span>";
                    echo "<br>";
                    echo "<br>";
                    }
                    
                }
                
                ?>


            </div>
        
          
        </div>
        <div><h1 class="tituloPagina">CARNES</h1>
            <div class="texto">
            <?php
                
                foreach ($menu->plato as $plato) {
                    if($plato['tipo']=="Carne"){
                        
                    echo "<span class='tituloPlato'>".$plato->nombre."</span>";
                    echo "<span class=precio>$plato->precio</span>";
                    echo "<div class=item>";
                        foreach ($plato->caracteristcias->item as $item){
                            echo "<img src=".$item.">";
                        }
                    echo "</div>";
                    echo "<span class='descripcion'>".$plato->caracteristicas."</span>";
                    echo "<br>";
                    
                    echo "<span class='descripcion'>".$plato->descripcion."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->calorias."</span>";
                    echo "<br>";
                    echo "<br>";
                    }
                    
                }
                
                ?>

               
            </div>
            
        </div>
        <div><h1 class="tituloPagina" >PESCADOS</h1>
            <div class="texto">
            <?php
                
                foreach ($menu->plato as $plato) {
                    if($plato['tipo']=="Pescados"){
                        
                    echo "<span class='tituloPlato'>".$plato->nombre."</span>";
                    echo "<span class=precio>$plato->precio</span>";
                    echo "<div class=item>";
                        foreach ($plato->caracteristcias->item as $item){
                            echo "<img src=".$item.">";
                        }
                    echo "</div>";
                    echo "<span class='descripcion'>".$plato->caracteristicas."</span>";
                    echo "<br>";
                    
                    echo "<span class='descripcion'>".$plato->descripcion."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->calorias."</span>";
                    echo "<br>";
                    echo "<br>";
                    }
                    
                }
                
                ?>

               
            </div>
            
            
        </div>
        <div><h1 class="tituloPagina" >MENÚ INFANTIL</h1>
            <div class="texto">
            <?php
                
                foreach ($menu->plato as $plato) {
                    if($plato['tipo']=="Postres"){
                        
                    echo "<span class='tituloPlato'>".$plato->nombre."</span>";
                    echo "<span class=precio>$plato->precio</span>";
                    echo "<div class=item>";
                        foreach ($plato->caracteristcias->item as $item){
                            echo "<img src=".$item.">";
                        }
                    echo "</div>";
                    echo "<span class='descripcion'>".$plato->caracteristicas."</span>";
                    echo "<br>";
                    
                    echo "<span class='descripcion'>".$plato->descripcion."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->calorias."</span>";
                    echo "<br>";
                    echo "<br>";
                    }
                    
                }
                
                ?>

               
            </div></div>
        <div><h1 class="tituloPagina">POSTRES</h1>
            <div class="texto">
            <?php
                
                foreach ($menu->plato as $plato) {
                    if($plato['tipo']=="Postres"){
                        
                    echo "<span class='tituloPlato'>".$plato->nombre."</span>";
                    echo "<span class=precio>$plato->precio</span>";
                    echo "<div class=item>";
                        foreach ($plato->caracteristcias->item as $item){
                            echo "<img src=".$item.">";
                        }
                    echo "</div>";
                    echo "<span class='descripcion'>".$plato->caracteristicas."</span>";
                    echo "<br>";
                    
                    echo "<span class='descripcion'>".$plato->descripcion."</span>";
                    echo "<br>";
                    echo "<span class='descripcion'>".$plato->calorias."</span>";
                    echo "<br>";
                    echo "<br>";
                    }
                    
                }
                
                ?>

               
            </div>
        </div>
        

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="turn.min.js"></script>
   <script>$('#flipbook').turn({gradients: true, acceleration: true});</script> 
   <script>$('#flipbook').turn('page');</script> 
   <?php

   ?>
</body>
</html>