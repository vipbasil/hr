<?
$link = mysql_connect('localhost', 'humres_user0', 'J3nHTyXBSG42nhx6');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('humres');
?>