<?php

namespace Stephanie\PooCombat;

class Personnage{
    
    
    public $personnage_name;
    public $personnage_life;
    public $personnage_fight;
    public $personnage_armure =0;   

    public function __construct($personnage_name, $personnage_life, $personnage_fight , $personnage_armure){
        $this->personnage_name = $personnage_name;
        $this->personnage_life = $personnage_life;
        $this->personnage_fight = $personnage_fight;
        $this -> personnage_armure =  $personnage_armure;
    }
    
   
    public function mort(){
        return $this -> personnage_life <=0;
        
    }

    public function bonus(){
        echo "le hero prend un bonus ";
        return $this -> personnage_life = $this->personnage_life + 50;
    }
    public function armure (){
        echo " le hero prend une armure ";
        return $this -> personnage_armure = $this->personnage_armure +20;
    }
    
    public function heroAttaque($cible){

        
       $cible-> personnage_life = $cible->personnage_life - $this -> personnage_fight;
       echo "le hero attaque ";
        if($cible -> mort()){
            
            echo " le personnage est mort  ";
           

            
        }
        return ;
    }
    
    

    public function attaque($hero){
        // vie = vie actuelle - (attaque reçu - mon armure)
        $hero-> personnage_life= $hero->personnage_life - ($this -> personnage_fight - $hero->personnage_armure);
        $hero->personnage_armure = ceil(0.8 * $hero->personnage_armure);
        echo " le hero prend des degats ";


        if($hero -> mort()){
            echo " Vous avez perdu";
            unset($hero);
          
            return ;
        }

      
        
    }
 
}