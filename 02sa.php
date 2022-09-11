<?php
$table = array( 
    array('id' , 'species','type1','type2','ability','hp','attack','defense' ),
     array('1' , 'Bulbasaur','Grass','Poision','Overgrow',  45, 49,'49' ),
     array('2' , 'Ivysaur','Grass','Poision','Overgrow',   60, 62,'63' ),
     array('3' , 'Venusaur','Grass','Poision','Overgrow',  80, 82,'83' ),
     array('4' , 'Charmander','Fire','N/A','Blaze', 39, 52,'43' ),
     array('5' , 'Charmeleon','Fire','N/A','Blaze', 58, 64,'58'),
     array('6' , 'Charizard','Fire','Flying','Blaze', 78, 84,'78'),
     array('7' , 'Squirtle','Water','N/A','Torrent', 44, 48,'65'),
     array('8' , 'Wartortle','Water','N/A','Torrent', 59, 63,'80'),
     array('9' , 'Blastoise','Water','N/A','Torrent', 79, 83,'100'),
     array('10' , 'Caterpie','Bug','N/A','Shield Dust', 50, 20,'55'),    
    );

    
    function hp_sum($array)
    {
        $sum = 0;
        $hp_column = 5;
        
        foreach ($array as $key => $value) {
            foreach ($value as $ind => $val) {
                if ($key > 0 && $ind == $hp_column) {
                    $sum += $val;
                }
            }
        }
        return $sum;
    }
    echo "Health Summation of Pokemons: " . hp_sum($table);
  

    function ave_attack($array)
    {
        $x = 1;
        $count = 0;
        $ave = 0;
        $attack_column = 6;
        
        foreach ($array as $key => $value) {
            foreach ($value as $ind => $val) {
                if ($key > 0 && $ind == $attack_column) {
                    $ave += $val;
                    $count = $x + $count;
                   
                }
            }
        }
        return $ave/$count;
       
    }
    echo "<br>Average Attack of Pokemons: " . ave_attack($table);
   
  
 
?>