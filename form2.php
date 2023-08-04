</php 
$Cloths = $_GET['Cloths'];
if (count($Cloths)>=0  )
echo "you have selected".$Cloths[0]."and".$Cloths[1]."!";
else
echo "you have not selected";
?>