<?php
if(isset($_POST['submitcheck'])){//to run PHP script on submit
if(!empty($_POST['programming_language'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['programming_language'] as $selected){
echo $selected."</br>";
}
}
}
?>
