<?php
    $con=mysqli_connect('localhost','root','','grp-5');
    $query='select brand from product;';
    $res=mysqli_query($con,$query);
    $a=array();
    while($row=mysqli_fetch_row($res)){
        $a[]=$row[0];
    }
    $q = $_REQUEST["q"];
    $aa=array_unique($a);
    $hint = "";
    if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q);
        foreach($aa as $name) {
          if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
              $hint = $name;
            } else {
              $hint .= ", $name";
            }
          }
        }
      }
      echo $hint === "" ? "no suggestion" : $hint;
?>