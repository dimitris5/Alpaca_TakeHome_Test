<!DOCTYPE html>
<html>
<body>
 
<?php    
echo "a) Display the array in numerical order<br>";

$numbers = array(1,2,2,3,4,5,6,7,5,6,7,8,9,10,12,1,23,4,54,4,67,19,10);    
sort($numbers, SORT_NUMERIC);  
foreach( $numbers as $n )    
{    
  echo "$n<br />";    
}    

echo "<br><br>b) Find and print out all duplicates<br><br>";

$duplicates = array();
foreach(array_count_values($numbers) as $val => $c)
    if($c > 1) $duplicates[] = $val;


foreach( $duplicates as $d )    
{    
  echo "$d<br />";    
} 


$array67 = array();
for( $i=1; $i<=67; $i++ )
{

$array67[] = $i;

}


echo "<br><br>c) Print out all missing numbers in sequence (so between 1-67, print out all numbers missing from the above array) in numerical order<br><br>";

$output = array();
$arr1_uniques = array_diff($numbers, $array67);
$arr2_uniques = array_diff($array67, $numbers);
$output = array_merge($arr1_uniques, $arr2_uniques);

sort($output, SORT_NUMERIC); 

foreach( $output as $o )    
{    
  echo "$o <br/>";    
} 

?>	
 
</body>
</html>