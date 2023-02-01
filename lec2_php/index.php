<?php 
$age =20 ; //Declaration
$age=15; // inlization
// const By = 3.14;
// echo By ;
// define('BY',3.14);
// echo constant('BY');  
// coditions: 
// 1-if(condition){action}
// 2-if(condition){action}else{action}
// 3-elseif(condition){action}
// 4-switch()
//  if($age > 18){
//     echo 'عز شبابك' ;
//  }else{
//     echo "لساتك طفل ";
//  }

// if($age >60){
//     echo "دير بالك ع حالك";
// }elseif($age > 18 ){
//     echo 'عز شبابك'; 
// }else{
//     echo "لساتك طفل ";
//  }

// $day = "sat4" ;
// switch($day){
//     case "sat":
//         echo "today is satrday";
//         break;
//     case "sun" :
//         echo "today is sunday";
//         break;
//     default:{
//         echo "today is friday";
//     }

// }

$color = "pink";
// array 
// 1- index array ;
// $array = ['ahmed' ,'ali' ,'farah','marah',50];
// $array[] = "mohammed";
// $array[2] = "alaaaa";
// $array[1]= null; 
// unset($array[1]);
// print_r($array);
//////////////////////////////
//2-multi dimintion array 
// $persons=[
//     ['ahmed' , 20 , 'male'],
//     ['Ali' , 25 , 'male'],
//     ['alaa', 25, 'female'],
// ];
// $persons[] = "llll";
//3-assicative array 
// $array = [
// 'ahmed' => '25',
// 'allaa' => '20',
// 'mohammed' => '22',
// 'spbhi' => '21',
//  300 => '55',
// ];
// $keys = array_keys($array);
// $values = array_values($array);
// echo "<pre>";
// var_dump($values);
// echo "</pre>";

// ?> 
<!-- <H1 style="color:<?php echo $color ?>;">Home</H1> -->

<?php
// Loop : 
//for(init , condition , counter){action}

$array = ['ahmed', 'ali', 'farah', 'marah', 50];
// for($i= 0 ; $i <= count($array)-1; $i++){
//   echo $array[$i] . '<br>';
// }

// $i = 0 ;
// while($i < count($array)){
//     echo $array[$i] . '<br>';
//     $i++ ;
// }
// $i =0; 
// do{
//   echo $array[$i] . '<br>';
//   $i++;
// }while($i < count($array));
// foreach($array as $value){
//     echo $value . '<br>';
// }
// $x = 10; 11 12
// $y = 5; 6
// $x++ + $y++ - $x++ + ++$y * 2; 
// 10 + 5 - 11 + 7 * 2 ;
// 10 +5 -11 + 14 ; 
// 18
//17 1

//20 1
//22 3
//23 1
//-7 2
//16 1
//27 1
// - Recursion : 
// $val = 4 ;
// function fact($val){
//     $res = 1;
//     for($i = 1 ; $i <= $val ; $i++) {
//        $res *= $i ;
//     }
//     echo $res ;
// }

//  function fact($val){
//     $res = 1;
//     if($val >=1){
//       $res = $val*fact($val -1) ;
//       return $res;
//     }else{
//         return 1;
//     }
//     return $res ;
//  }
//  echo fact(4);
//golobal variable : 
//1-GOLOBAL  //
//2-SERVER //
//3-EVN
//4-FILE
//5-REQUEST
//6-$_POST
//7-$_GET
//8-Session
//9-cookies
$x = 5 ;
var_dump($_SERVER);
// echo $_SERVER;