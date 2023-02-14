<?php

require 'vendor/autoload.php';
use Stephanie\PooCombat\Personnage;

    $hero = new Personnage("Clovis", 200, 15,0);
    
    
    
    
    dump($hero);
    
    $minion = new Personnage("Minion", 10, 10,0);
    dump($minion);

    $lieutenantMinion = new Personnage("lieutenant Minion", 30, 30,0);
    dump($lieutenantMinion);
    
    $chefMinion = new Personnage("chef Minion", 100, 100, 0);
    dump($chefMinion);
    

    
    while ($hero->personnage_life >=0){

        // je declare une variable qui contient les mechants
        $mechants=[$minion, $chefMinion, $lieutenantMinion];
        
        // je declare une secondes variables qui filtres les mechants encore en vie
        //(array_filter($array1, "odd"));
        $filterMechants = (array_filter($mechants,  fn ($mechant) => $mechant->mort()));
         // mechants.filter((mechant) => !mechant.mort())
        // je recupere un element aleatoire du tableau
        

        $aléatoire = random_int(1,8);
        if ($aléatoire==3){
            $hero->bonus();
            dump($hero);
        };
       
        if ($aléatoire==1){
            $hero->armure();
            dump($hero);
        };
        
        if ($aléatoire==2){
            $hero->heroAttaque($minion); 
            dump($minion);
        };
        
        if ($aléatoire==4) {
         $chefMinion->Attaque($hero);
         dump($hero);
        };
        if ($aléatoire==5) {
            $minion->Attaque($hero);
            dump($hero);
           };
    
        if ($aléatoire==6) {
            $lieutenantMinion->Attaque($hero);
            dump($hero);
           };
          
           if ($aléatoire==7){
            $hero->heroAttaque($chefMinion); 
            dump($chefMinion);
        };
        if ($aléatoire==8){
            $hero->heroAttaque($lieutenantMinion); 
            dump($lieutenantMinion);
        };

         
    }
    