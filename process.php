<?php


if(isset($_POST['service'])){
  switch($_POST['service']){
    case 'Piggybank' :
    $p=10/100;
    break;
    case 'SafeLock' : 
      $p=15.5/100;
    break;
    case 'Target' :
      $p=10/100;
     break;
    case 'Flex' :
      $p=10/100; break;
    case 'Flex Dollar' :
      $p=6/100; break;
    case 'Investify' :
      $p=25/100; break;
      default: 
      $p=10/100;
    break;
  }

if(isset($_POST['type-time'])){
  switch($_POST['type-time']){
    case 'today' :
      $days=1;
    break;
    case 'thisweek' : 
      $days=7;
    break;
    case 'thismonth' :
      $days=30;
     break;
    case 'thisyear' :
      $days=365; break;
   
      default: 
      $days=1;
    break;
  }

}else{
  echo 'false';
}
if(isset($_POST['amount'])){
  $amount=$_POST['amount'];

}else{
  echo 'false';
}

echo $amount*$days*$p;


}else{
  echo 'false';
}

?>
