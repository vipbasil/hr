<?php
/* @var $this DaysController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Days',
);


?>

<h1>Дни</h1>
<h3>Осторожно, пасхальные праздники нужно устанавливать вручную</h3>

<script  type="text/javascript">


</script>
		<div id='calendar'>
		<?php
		$daycallback= new CJavaScriptExpression("function(date, allDay, jsEvent, view) {
			 if (allDay) {
		    			 $.post('http://hr.dfm.sh/backend/update_day.php',{ thisDay:date,type:'1' },
		    			 	function(data,status){
		    			 		$(\"#yw0\").fullCalendar('refetchEvents');
		    			 	}
		    			 );
		    			}else{
		    			alert('Clicked on the slot: ' + date);
		    			       }
	   }");
		$this->widget('ext.EFullCalendar.EFullCalendar', array( 'lang'=>'ru',
    	'themeCssFile'=>'cupertino/jquery-ui.min.css',
    	'options'=>array(
        'header'=>array(
            'left'=>'prev,next',
            'center'=>'title',
            'right'=>'today'
        ),

    	'events'=>"http://hr.dfm.sh/backend/get_days.php",
    	'dayClick'=>$daycallback,
    	'lazyFetching'=>false,
    	     	),
    ));
?> </div>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
