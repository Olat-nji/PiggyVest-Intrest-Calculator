<?php
session_start();
if(isset($_POST['member_level'])){
      if($_POST['member_level']=='newbie'){
if(isset($_POST['service'])){
  switch($_POST['service']){
    case 'Piggybank' :
    $p=10/100;
    $pas='Piggybank';
    break;
    case 'SafeLock' : 
      $p=15.5/100;
      $pas='SafeLock';
    break;
    case 'Target' :
      $p=10/100;
      $pas='Target';
     break;
    case 'Flex' :
      $p=10/100; 
      $pas='Flex';
      break;
    case 'Flex Dollar' :
      $p=6/100; 
      $pas='Flex Dollar';
      break;
    case 'Investify' :
      $p=25/100; 
      $pas='Investify';
      break;
      default: 
      $p=10/100;
    break;
  }}

if(isset($_POST['type-timer'])){
  switch($_POST['type-timer']){
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
  echo 'Your intrest is NGN '.round($amount*$days*$p,2); 

  $_SESSION['tot']=round($amount*$days*$p,2);
  $_SESSION['amount']=$amount;
  $_SESSION['days']=$days;
   $_SESSION['for']=$pas;
}else{
  echo 'false';
}
     
   
}else if($_POST['member_level']=='average'){
    
if(isset($_POST['servicer'])){
switch($_POST['servicer']){
    case 'Piggybank' :
    $p=10/100;
    $pas='Piggybank';
    break;
    case 'SafeLock' : 
      $p=15.5/100;
      $pas='SafeLock';
    break;
    case 'Target' :
      $p=10/100;
      $pas='Target';
     break;
    case 'Flex' :
      $p=10/100; 
      $pas='Flex';
      break;
    case 'Flex Dollar' :
      $p=6/100; 
      $pas='Flex Dollar';
      break;
    case 'Investify' :
      $p=25/100; 
      $pas='Investify';
      break;
      default: 
      $p=10/100;
    break;
  }
}else{
  echo 'false';
}
if(isset($_POST['type-timer'])){
  switch($_POST['type-timer']){
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


if(isset($_POST['amounti'])){
  $amount=$_POST['amounti'];
  
   $_SESSION['tot']=$amount;
  $_SESSION['amount']=round($amount/($days*$p),2);
  $_SESSION['days']=$days;
   $_SESSION['for']=$pas;
echo 'You need to invest NGN '.round($amount/($days*$p),2).' daily ';
}else{
  echo 'false';
}
          
    


}
else{
    echo 'false';
}

}else{
  echo 'false';
}



?>
