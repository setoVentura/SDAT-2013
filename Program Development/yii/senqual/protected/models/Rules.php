<?php

/**
 * This is the model class for table "tbl_rules".
 *
 * The followings are the available columns in table 'tbl_rules':
 * @property string $id
 * @property string $starts
 * @property string $ends
 * @property string $discipline
 * @property string $owner
 * @property string $property
 * @property integer $isPrivate
 */
class Rules extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rules';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('isPrivate', 'numerical', 'integerOnly'=>true),
			array('id, starts, ends, discipline, owner, property', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, starts, ends, discipline, owner, property, isPrivate', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'starts' => 'Starts',
			'ends' => 'Ends',
			'discipline' => 'Discipline',
			'owner' => 'Owner',
			'property' => 'Property',
			'isPrivate' => 'Is Private',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('starts',$this->starts,true);
		$criteria->compare('ends',$this->ends,true);
		$criteria->compare('discipline',$this->discipline,true);
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('property',$this->property,true);
		$criteria->compare('isPrivate',$this->isPrivate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rules the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
