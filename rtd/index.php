<?php
    class Roman
    {

    public function roman_convert($input_roman)
    {
    $di=array('I'=>1,
         'V'=>5,
         'X'=>10,
         'L'=>50,
         'C'=>100,
         'D'=>500,
         'M'=>1000);
    $result=0;
    if($input_roman=='')

     return $result;
    for($i=0;$i<strlen($input_roman);$i++)
    {
    $result=(($i+1)<strlen($input_roman) and $di[$input_roman[$i]]<$di[$input_roman[$i+1]])?($result-$di[$input_roman[$i]]):($result+$di[$input_roman[$i]]);
    }
    return $result;
    }

public function decimal_convert($num)
    {
$n = intval($num);
$res = '';
$romanNumber_Array = array(
'M' => 1000,
'CM' => 900,
'D' => 500,
'CD' => 400,
'C' => 100,
'XC' => 90,
'L' => 50,
'XL' => 40,
'X' => 10,
'IX' => 9,
'V' => 5,
'IV' => 4,
'I' => 1);
foreach ($romanNumber_Array as $roman => $number){
 
$matches = intval($n / $number);
$res .= str_repeat($roman, $matches);
$n = $n % $number;
}
 
return $res;
}
}
 ?>