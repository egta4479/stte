<?php

class RegisterController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $students;
	public $days=array ( 1 => 'Monday', 2 => 'Tuesday',3=>'Wednesday',4=>'Thursday',5=>'Friday',6=>'Saturday',7=>'Sunday' );

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','view'),
				'expression'=>'isset($user->role) && ($user->role==="student")',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$register=Register::model()->find('id=:id',array('id'=>$id))->with(array('lecture','student'));
		$this->render('view',array(
			'model'=>$register,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function getStudent()
	{
		$student=Student::model()->find('code=:code',array(':code'=>Yii::app()->user->getId()));
		return array($student->id=>$student->name.' '.$student->surname);
	}
	public function getStudentId()
	{
		$student=Student::model()->find('code=:code',array(':code'=>Yii::app()->user->getId()));
		return $student->id;
	}

	public function getLectures()
	{
		$lecture_array=array();
		$lectures=Lecture::model()->findAll();

		foreach ($lectures as $lecture) {
			$lecture_array[$lecture->id]=$lecture->code.'-'.$lecture->name.$this->getStatus($lecture->ismandatory);
		}
		return $lecture_array;
	}
	public function getType($type){
		if($type==0){
			return '(Floor)';
		}
		else
		{
			return '(Classroom)';
		}
	}
	public function getClassroom($lecture_id){
		$lecture_classroom=LectureClassroom::model()->find('lecture_id=:lecture_id',array('lecture_id'=>$lecture_id));
		if($lecture_classroom){
			return $lecture_classroom->with('lecture');
		}
		return null;
	}

	public function getStatus($status)
	{
		if ($status==1){
			return '(must)';
		}
		return '(optional)';
	}

	public function getMusts(){
		return Register::model()->with('lecture')->findAll('ismandatory=:ismandatory AND student_id=:student_id',array(':ismandatory'=>1,'student_id'=>$this->getStudentId()));
	}

	public function getOptionals(){

		return Register::model()->with('lecture')->findAll('ismandatory=:ismandatory AND student_id=:student_id',array(':ismandatory'=>0,'student_id'=>$this->getStudentId()));
	}
	public function isIn($registers,$register_in)
	{
		foreach ($registers as $register) {
			if($register->lecture_id==$register_in->lecture_id)
			{
				return true;
			}
		}
		return false;
	}
	public function isMandatory($lecture_id){
		$lecture=Lecture::model()->find('id=:id',array(':id'=>$lecture_id));
		return $lecture->ismandatory;
	}
	public function actionCreate()
	{
		$model=new Register;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$musts=$this->getMusts();
		$optionals=$this->getOptionals();

		$total=sizeof($musts)+sizeof($optionals);
		if(isset($_POST['Register']))
		{
			$model->attributes=$_POST['Register'];

			$model->lecture_id;
			if( !$this->isIn($musts,$model) && !$this->isIn($optionals,$model) )
			{
				$ismandatory=$this->isMandatory($model->lecture_id);
				if(($ismandatory && sizeof($musts)<3) || (!$ismandatory && sizeof($optionals)<2))
				{

					if($model->save())
						$this->redirect(array('view','id'=>$model->id));

				}
				else
				{
					$model->addError('lecture_id', '#Must courses<=3, #Optional courses<=2');
				}

			}
			else
			{
					$model->addError('lecture_id', 'Already chosen!');				
			}

		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Register']))
		{
			$model->attributes=$_POST['Register'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria(array(                    
                                'condition'=>'student_id='.$this->getStudentId(),
                                'with'=>array('lecture'),
                        ));
		$dataProvider=new CActiveDataProvider('Register',array(
            'criteria'=>$criteria));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Register('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Register']))
			$model->attributes=$_GET['Register'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Register the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Register::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Register $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='register-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
