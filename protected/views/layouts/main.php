<?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCoreScript('jquery.ui');
?>
<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <?
    $haveCompany=0;$company_name=" !!!Нужно выбрать активное предприятие!!!";
	if(!Yii::app()->user->isGuest)
	{
		$haveCompany=Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
		if($haveCompany>0)
		{
			$company_name=" Предприятие:".(Yii::app()->getModule('user')->user()->profile->company->COMPANY_NAME);

		}
	}
    ?>
	<title><?php echo (CHtml::encode($this->pageTitle)) ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">

		<div id="logo"><?php
		$personal_name="";
		if(isset($_GET['pid'])&&$_GET['pid']>0)
		{
	 		$personal_name=" | ".Personal::model()->findByPk($_GET['pid'])->full_name;
		}
		echo (CHtml::encode(Yii::app()->name)).$company_name.$personal_name;
		?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Информация', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Контакты', 'url'=>array('/site/contact')),
 /* array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest), */
        /* array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest), */
        array('label'=>'Rights', 'url'=>array('/rights'), 'visible'=>!Yii::app()->user->isGuest),
        array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
        array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
        array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
        array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
			),
		));


		?>

</div><!-- mainmenu -->
<div id="secondmenu">
<?php
$admin=0;
if(Yii::app()->user->isSuperuser==true)$admin=1;
 $this->widget('zii.widgets.CMenu', array(
                'items' => array(

                 array(
                        'label' => 'Сервис',
                        'url' => '#',
                        'visible'=>!Yii::app()->user->isGuest,
                        'items' => array(
                           array(
                                'label' => 'Выбрать предприятие',
                                'url' => 'http://hr.dfm.sh/index.php?r=user/profile/edit',
                            ),
                           array(
                                'label' => 'Работа с персоналом',
                                'url' => 'http://hr.dfm.sh/index.php?r=personal',
                                'visible'=>$haveCompany,
                            ),
                            array(
                                'label' => 'Отпуски',
                                'url' => '#',
                                'visible'=>$haveCompany,
                            ),

                        )
                    ),
                     array(
                        'label' => 'Отчеты',
                        'url' => '#',
                        'visible'=>(!Yii::app()->user->isGuest)&&($haveCompany),
                        'items' => array(
                           array(
                                'label' => '1',
                                'url' => '#',

                            ),
                            array(
                                'label' => '2',
                                'url' => '#',

                            ),

                        )
                    ),
                    array(
                        'label' => 'Справочники',
                        'url' => '#',
                        'visible'=>!Yii::app()->user->isGuest,
                        'items' => array(
                           array(
                                'label' => 'Учебные Заведения',
                                'url' => 'http://hr.dfm.sh/index.php?r=scoolBase',
                            ),
                            array(
                                'label' => 'Предприятия',
                                'url' => 'http://hr.dfm.sh/index.php?r=companies',
                            ),
                            array(
                                'label' => 'Документы',
                                'url' => 'http://hr.dfm.sh/index.php?r=documents',
                                 'visible'=>$haveCompany,
                            ),

                             array(
                                'label' => 'Должности',
                                'url' => 'http://hr.dfm.sh/index.php?r=jobType'
                            ),

                             array(
                                'label' => 'Сотстояния работ',
                                'url' => 'http://hr.dfm.sh/index.php?r=jobStatus'
                            ),

                             array(
                                'label' => 'Дни года',
                                'url' => 'http://hr.dfm.sh/index.php?r=days'
                            ),
                            array(
                                'label' => 'Члены семьи',
                                'url' => 'http://hr.dfm.sh/index.php?r=familyMemberType'
                            ),
                           array(
                                'label' => 'Страны',
                                'url' => 'http://hr.dfm.sh/index.php?r=countries'
                            ),
                             array(
                                'label' => '|',
                                array(
                                    'class' => 'divider',
                                )
                            ),
                        )
                    ),


                     array(
                        'label' => 'Типы Данных',
                        'url' => '#',
                        'visible'=>!Yii::app()->user->isGuest,
                        'linkOptions'=> array(

                            ),

                        'items' => array(
                           array(
                                'label' => 'Типы Учебных Заведений',
                                'url' => 'http://hr.dfm.sh/index.php?r=scoolType',
                            ),
                            array(
                                'label' => 'Типы Документов',
                                'url' => 'http://hr.dfm.sh/index.php?r=documentTypes',
                            ),
                           array(
                                'label' => 'Типы контактов',
                                'url' =>'http://hr.dfm.sh/index.php?r=typeOfContacts'
                            ),

                        ),
                    ),
                    array(
                        'label' => 'Зона Администратора',
                        'url' => '#',
                        'visible'=>$admin,
                        'items' => array(
                           array(
                                'label' => 'Связка между юзерами и компаниями',
                                'url' => 'http://hr.dfm.sh/index.php?r=fusercamp',
                            ),
                        )
                    ),
                ),
                'encodeLabel' => false,

            ));?>
</div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">

		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php  echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
