<?php
class shuffling
{
  public function shuffleWithKeys(&$array) {
    /* Auxiliary array to hold the new order */ 
    $aux = array(); 
    /* We work with an array of the keys */ 
    $keys = array_keys($array); 
    /* We shuffle the keys */ 
    shuffle($keys); 
    /* We iterate thru' the new order of the keys */ 
    foreach($keys as $key) { 
      /* We insert the key, value pair in its new order */ 
      $aux[$key] = $array[$key]; 
      /* We remove the element from the old array to save memory */ 
      unset($array[$key]); 
    } 
    /* The auxiliary array with the new order overwrites the old variable */ 
    $array = $aux; 
  } 
} 
?>
