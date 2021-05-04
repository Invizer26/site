
<?
include 'imageToSmall.php';
include 'config/config.php';

$sqlImages = 'select * from Images';
$resImages = mysqli_query($link,$sqlImages);
$arrImages = mysqli_fetch_all($resImages);
$width = 203;
$height = 115;

foreach ($arrImages as $key => $value){
    create_thumbnail('public/images/product/'.$value[1].$value[2],'public/images/product/mini/'.$value[1].'_mini'.$value[2],$width,$height);
//    mysqli_query($link,'update Images_mini ');
}
?>
