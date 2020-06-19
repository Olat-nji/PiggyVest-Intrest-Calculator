
<?php
session_start();
if(isset($_SESSION['id'])){
  $reportname='Piggyvest-report'.$_SESSION['id'];  
}else{
    $_SESSION['id']=uniqid();
    $reportname='Piggyvest-report'.$_SESSION['id']; 
}


require __DIR__ . '/convert/lib/ConvertApi/autoload.php';



use \ConvertApi\ConvertApi;

# set your api secret
ConvertApi::setApiSecret('GUI5RnloF0soPqHz');

# Example of converting Web Page URL to PDF file
# https://www.convertapi.com/web-to-pdf

$fromFormat = 'web';
$conversionTimeout = 180;
$dir = sys_get_temp_dir();


$result = ConvertApi::convert(
    'pdf',
    [
        'Url' => 'https://skylevelconcepts.com.ng/piggyvest-intrest-calculator/gen.php?tot='.$_SESSION['tot'].'&amount='.$_SESSION['amount'].'&days='.$_SESSION['days'].'&for='.$_SESSION['for'],
        'FileName' => $reportname
    ],
    $fromFormat,
    $conversionTimeout
);

$savedFiles = $result->saveFiles('reports/'.$reportname.'.pdf');
if(isset($_POST['member_level'])){
    echo $savedFiles[0];
}else{
header("Location: ".$savedFiles[0].""); 
}
