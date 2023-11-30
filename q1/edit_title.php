<?php
include_once "db.php";
dd($_POST);
foreach ($_POST['id'] as $key => $id) {
    $row = $Title->find($id);
    // dd($row);
    $row['text'] = $_POST['text'][$key];
    // dd($row);
    $Title->save($row);
}

foreach ($_POST['id'] as $id) {
    $row = $Title->find($id);
    /* if($id==$_POST['display']){
        $row['display']=1;
    }else{
        $row['display']=0;
    } */
    $row['display'] = ($id == $_POST['display']) ? 1 : 0;
    $Title->save($row);
}
/* 
$_POST['display']=0;
$Title->save($_POST);
header("location:index.php");
 */

 ?>