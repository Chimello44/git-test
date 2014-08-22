<!DOCTYPE>

<html>
    <head>
        
    </head>
    <body>
        <?php
            $p1= ;
            $m1=;
            $m2=;
            $proj1=;
            $proj2=;
            $proj3=;
            $proj4=;
            $trabf=;
            $proc=;
            $pf=;
            
            $MI=(30*p1+10*m1+10*m2+5*proj1+5*proj2+5*proj3+5*proj4+10*trabf+20*proc)/100;
            if($mi>=7.5){
                  $mf=$mi;
                  echo "Aprovado sem Prova Final. Boas Férias";
            }
            else{
                $mf=($mi+$pf)/2;
            }
            if($mf>=5.0){
                echo"Aprovado com Prova Final";
            }
            else($mf<5.0){
                echo "reprovado";
                echo" Media Intermediaria"+$mi;
                echo" Media Final"+$mf;
            }
?>

    </body>
</html>
