<?
include "init.php";
 $items=array();
 $res=mysql_query("select * from days where TYPE_of_day_id=8");
 while($row=mysql_fetch_assoc($res))
 {
 	$items[]=array(
         'start'=>$row['DATE'],
         'color'=>'red',
         'allday'=>true

 	);
 }
echo json_encode($items);
?>