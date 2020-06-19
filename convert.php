
<?php
session_start();
$id=uniqid();

require __DIR__ . '/convert/lib/ConvertApi/autoload.php';



use \ConvertApi\ConvertApi;

# set your api secret
ConvertApi::setApiSecret('GUI5RnloF0soPqHz');

# Example of converting Web Page URL to PDF file
# https://www.convertapi.com/web-to-pdf

$fromFormat = 'web';
$conversionTimeout = 180;
$dir = sys_get_temp_dir();
$_SESSION['reportname']='Piggyvest-report'.$id;

$result = ConvertApi::convert(
    'pdf',
    [
        'Url' => 'https://skylevelconcepts.com.ng/piggyvest-intrest-calculator/gen.php?tot='.$_SESSION['tot'].'&amount='.$_SESSION['amount'].'&days='.$_SESSION['days'].'&for='.$_SESSION['for'],
        'FileName' => $_SESSION['report-name']
    ],
    $fromFormat,
    $conversionTimeout
);

$savedFiles = $result->saveFiles('reports/Piggyvest-report'.$id.'.pdf');
if(isset($_POST['member_level'])){
    echo $savedFiles[0];
}else{
header("Location: ".$savedFiles[0].""); 
}
