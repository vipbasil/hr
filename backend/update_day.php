<?
include "init.php";
$data=$_POST['thisDay'];
$time = strtotime($data);
$date=date('Y-m-d',$time);
$query="SELECT * from `days` where `date`='".$date."';  ";
$res=mysql_query($query);
$type=0;
while ($row=mysql_fetch_assoc($res))
	{     $type+=$row['TYPE_OF_DAY_ID'];	}
 switch($type)
 	{ 	  case 2:
 	  case 3:
 	  case 4:
 	  case 5:
 	  case 6:
 	  case 7:
 	  case 1: {$type=8;};break;
 	  case 8: {$type=2;};break; 	}

$query="Update `days` set TYPE_OF_DAY_ID=".$type." where `date`='".$date."' LIMIT 1;  ";
$res=mysql_query($query);
echo $type;


?>