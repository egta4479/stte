<?php

/**
 * This is the model class for table "lecture_faculty_member".
 *
 * The followings are the available columns in table 'lecture_faculty_member':
 * @property integer $id
 * @property integer $lecture_id
 * @property integer $facultymember_id
 *
 * The followings are the available model relations:
 * @property Facultymember $facultymember
 * @property Lecture $lecture
 */
class LectureFacultyMember extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lecture_faculty_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lecture_id, facultymember_id', 'required'),
			array('lecture_id, facultymember_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lecture_id, facultymember_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'facultymember' => array(self::BELONGS_TO, 'Facultymember', 'facultymember_id'),
			'lecture' => array(self::BELONGS_TO, 'Lecture', 'lecture_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lecture_id' => 'Lecture',
			'facultymember_id' => 'Facultymember',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('lecture_id',$this->lecture_id);
		$criteria->compare('facultymember_id',$this->facultymember_id);

		$criteria->addSearchCondition('lecture.id',$this->lecture_id);
		$criteria->addSearchCondition('facultymember.id',$this->facultymember_id);
		$criteria->with=array('lecture','facultymember'); 

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LectureFacultyMember the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
