 <?php
 
 ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
            require '../destackAssociados/insert/configUrl.php';
            
            
            try{
               $url = new configUrl();
               $url->carregar();
               
                
            } catch (Exception $ex) {

            }
            
           
        ?>
    </body>
</html>
