<?php
##implement str repeat
// function my_str_repeat(string $str, int $num , bool $space=false) { 
//     $result = "";
//     // for($i=0; $i<$num; $i++){
//     //     if($space) {
//     //         $result .= $str . " ";
//     //     }
//     //     else {
//     //         $result .= $str;
//     //     }
//     // }
//     $separator = $space ? "  " : "";
//     for($i=0; $i<$num; $i++){
//         $result .= $str . $separator;
//     }
//     return $result;
// }

// echo my_str_repeat("Elzero", 3 , true);


## implement strlen
// function my_strlen(string $str) {
//     $count = 0 ; 
//     while (isset ($str[$count])) {
//         $count++;
//     }
//     return $count ;

// }
// echo my_strlen("Elzero"); 



## implement strrev
// function my_strrev (string $str) {
//     $result = "";
//     for($i=strlen($str)-1; $i>=0; $i--) {
//         $result .= $str[$i];
//     }
//     return $result;
// }
// echo my_strrev("Elzero");


## implement my_explode
// function my_explode (string $str) :array {
// 	$arr = [];
// 	for ($i=0; $i<=strlen($str) -1 ; $i++) {
// 		$arr[] = $str[$i] ; 
// 	}
// 	return $arr ;
// }
// echo "<pre>";
// print_r(my_explode("Elzero")) ;
// echo "</pre>" ;



## implement str_pad
// function my_str_pad(string $str , string $pad_element, int $pad_length) {

//     $length = strlen($str);
//     $half_length_pad_length = ceil(($pad_length + $length) / 2) ;

//     //add to the right
//     while($length < $half_length_pad_length) {
//         $str .= $pad_element;
//         $length++ ;
//     }

//     //add to the left
//     while($half_length_pad_length < $pad_length) {
//         $str = $pad_element .$str;
//         $half_length_pad_length++ ;
//     }

//     return $str;
// }

// another aproach 
// function my_str_pad($str, $pad_element, $pad_length) {
//     $length = strlen($str);
//     if ($length >= $pad_length) {
//         return $str; // No padding needed
//     }

//     $total_padding = $pad_length - $length;
//     $left_padding = floor($total_padding / 2);
//     $right_padding = $total_padding - $left_padding;

//     $pad_element_length = strlen($pad_element);

//     $left_pad_str = str_repeat($pad_element, ceil($left_padding / $pad_element_length));
//     $right_pad_str = str_repeat($pad_element, ceil($right_padding / $pad_element_length));

//     // Trim the padding to the exact required length in case the pad_element length > 1
//     $left_pad_str = substr($left_pad_str, 0, $left_padding);
//     $right_pad_str = substr($right_pad_str, 0, $right_padding);

//     return $left_pad_str . $str . $right_pad_str;
// }

// echo my_str_pad("elzero" , "0" , 100);