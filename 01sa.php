<?php
$table = array(
 
array('id' , 'species','type1','type2','ability','hp','attack','defense' ),
 array('1' , 'Bulbasaur','Grass','Poision','Overgrow','45','49','49' ),
 array('2' , 'Ivysaur','Grass','Poision','Overgrow','60','62','63' ),
 array('3' , 'Venusaur','Grass','Poision','Overgrow','80','82','83' ),
 array('4' , 'Charmander','Fire','N/A','Blaze','39','52','43' ),
 array('5' , 'Charmeleon','Fire','N/A','Blaze','58','64','58'),
 array('6' , 'Charizard','Fire','Flying','Blaze','78','84','78'),
 array('7' , 'Squirtle','Water','N/A','Torrent','44','48','65'),
 array('8' , 'Wartortle','Water','N/A','Torrent','59','63','80'),
 array('9' , 'Blastoise','Water','N/A','Torrent','79','83','100'),
 array('10' , 'Caterpie','Bug','N/A','Shield Dust','50','20','55'),
 array('Bulbasaur', 'ivysaur', 'venusaur','charmander', 'charmeleon', 'charizard', 'Squirtle', 'Watertortle', 'Blastoise', 'Caterpie')
);

#1

print_r($table); //print the array
echo "</br>";
echo count($table, COUNT_RECURSIVE); //echo the number of elements in an array
$favorite = $table[9] ; //Declare variable $favorite and assign your favorite specie (use array notation).
print_r($favorite);


#2
//using foreach display all the species in a list. 
echo "</br>";
$species = array('1' => 'Bulbasaur',
'2' => 'Ivysaur', '3'=> 'Venusaur', '4'=>'Charmander',
'5' => 'Charmeleon', '6'=> 'Charizard', '7'=> 'Squirtle',
'8'=> 'Watertortle', '9'=> 'Blastoise', '10'=> 'Caterpie'
);

foreach ($species as $name)
echo $name."</br>";



?>