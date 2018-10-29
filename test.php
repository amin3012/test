<?php





$result = array("400"=>"name","tops","techno",123.123,123);

print_r(array_pop($result));

exit;

function multipleArrayIntersect($arrayOfArrays, $matchKey) 
{ 

    $compareArray = array_pop($arrayOfArrays); 
    
	print_r($compareArray);
    foreach($compareArray as $key => $valueArray){ 
        foreach($arrayOfArrays AS $subArray => $contents){ 
            if (!in_array($compareArray[$key][$matchKey], $contents)){ 
                unset($compareArray[$key]); 
            } 
        } 
    } 

    return $compareArray; 
} 


$response = multipleArrayIntersect($result,'402');
print_r($response);
exit;












$del_value = "401";
//$del_values = array(... all the values you don`t wont);
$hobbies = array("Acting", "Drawing", "Music", "Films", "Photography");
 
echo "<pre>";
// Deleting first array item
print_r($hobbies);
$removed = array_shift($hobbies);
print_r($hobbies);
$removedLast = array_pop($hobbies);
print_r($hobbies);
echo "<br>";
var_dump($removedLast);
var_dump($removed);
exit;
foreach($result as $key =>$value){


	if ($i == 8)
    {
        continue;
    }
    if ($i == 5)
    {
        break;
    }


    if ($key == 401){
    	array_pop($result);
    	break;
        // $result[$key] = $value;
    }continue;


    //if(!in_array($value, $del_values)){
    //    $result[$key] = $value;
    //}

    //if($this->validete($value)){
    //      $result[$key] = $value;
    //}
}
echo "<pre>";
print_r( $result);