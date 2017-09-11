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
            $result = mt_rand(1, 4);
          echo "<h1>".$result."</h1>    "  ;
            //manier 1
            
//            if($result === 1){
//                echo "kop";
//            }elseif($result === 2){
//                echo "munt";
//            }else{
//                echo "remise";
//            }
            
         //manier 2   
            
          
          
            switch ($result) {
                case 1:
                    echo "<img src='kop.jpg' >";

                    break;
                case 2:
                    echo "<img src='munt.jpg' >";

                    break;
                case 3 || 4:
                    echo "remise";

                    break;
                
                default:
                    break;
            }
            

        ?>
        
    </body>
</html>
