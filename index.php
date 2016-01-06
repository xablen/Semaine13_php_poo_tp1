<?php
class Personnage
{
  private $_id,
          $_degats,
          $_nom;
  
  const CEST_MOI = 1;
  const PERSONNAGE_TUE = 2;
  const PERSONNAGE_FRAPPE = 3;
  
  public function frapper(Personnage $perso)
  {
    // Avant tout : vérifier qu'on ne se frappe pas soi-même.
      // Si c'est le cas, on stoppe tout en renvoyant une valeur signifiant que le personnage ciblé est le personnage qui attaque.
    
    // On indique au personnage frappé qu'il doit recevoir des dégâts.
  }
  
  public function recevoirDegats()
  {
    // On augmente de 5 les dégâts.
    
    // Si on a 100 de dégâts ou plus, la méthode renverra une valeur signifiant que le personnage a été tué.
    
    // Sinon, elle renverra une valeur signifiant que le personnage a bien été frappé.
  }
}