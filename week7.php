<?php
/*
String Functions
-- parse_str(String[Required], Array[Required])
-- quotemeta(String[Required])
-- str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
--- STR_PAD_BOTH
--- STR_PAD_LEFT
--- STR_PAD_RIGHT
-- strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
*/


parse_str("first_name=Ahmed&last_name=AbuObaida", $arr);
print_r($arr);
echo "<br>";
echo quotemeta("Ahmed AbuObaida []r5$%$&2");
echo "<br>";
echo "Ahmed AbuObaida []r5$%$&2";


echo "<br>";
echo str_pad("Ahmed AbuObaid", 20, "0", STR_PAD_LEFT);
echo "<br>";
echo str_pad("Ahmed AbuObai", 20, "0", STR_PAD_RIGHT);
echo "<br>";
echo str_pad("Ahmed AbuOba", 20, "0", STR_PAD_BOTH);
echo "<br>";
echo strtr("Ahmed AbuObaida", "A", "a");
echo  "<br>";
echo strtr("Ahmed AbuObaida", ["A" => "a" , "b" => "B"]);
echo  "<br>";
echo str_replace("Ahmed", "Osama", "Hello Ahmed");
echo  "<br>";
echo substr_replace("Ahmed AbuObaida", "Osama", 0, 5);
echo  "<br>";
echo chunk_split("AhmedAbuObaida", 3);
echo  "<br>";
echo mb_strlen("مرحبا"); // 5

?>