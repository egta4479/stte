<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<!--
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->
<ul>
<?php 
if(!isset(Yii::app()->user->role))
{
	$this->redirect(array('site/login'));
}
else if(Yii::app()->user->role=='admin'){ ?>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lecture/create">Ders Ekle</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lecture/admin">Ders Sil</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lecture/admin">Ders Güncelle</a></li>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/facultymember/create">Öğretim Görevlisi Ekle</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/facultymember/admin">Öğretim Görevlisi Sil</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/facultymember/admin">Öğretim Görevlisi Güncelle</a></li>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/classroom/create">Sınıf Ekle</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/classroom/admin">Sınıf Sil</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/classroom/admin">Sınıf Güncelle</a></li>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/student/create">Öğrenci Ekle</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/student/admin">Öğrenci Sil</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/student/admin">Öğrenci Güncelle</a></li>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lecture/admin">Ders Ara</a></li>
<hr>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lectureClassroom/create">Derse Sınıf Ata</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lectureClassroom/admin">Derse Ait Sınıfı Sil</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lectureClassroom/admin">Derse Ait Sınıfı Güncelle</a></li>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lectureFacultyMember/create">Öğretim Görevlisine Ders Ata</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lectureFacultyMember/admin">Öğretim Görevlisinden Ders Düşür</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/lectureFacultyMember/admin">Öğretim Görevlisine Ait Dersleri Güncelle</a></li>
<hr>
<?php } else if(Yii::app()->user->role=='student'){ ?>
	<li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/register/create">Derse Kaydol</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/register/admin">Dersten Kaydını Sil</a> | <a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/register/index">Alınan Dersleri Yönet</a></li>

</ul>

<?php }?>
