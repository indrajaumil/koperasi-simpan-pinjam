<?php

/**
 * This is the model class for table "m_creditunion".
 *
 * The followings are the available columns in table 'm_creditunion':
 * @property string $No_BA_Puskopdit
 * @property string $Nama
 * @property string $Badan_Hukum
 * @property string $Alamat
 * @property string $No
 * @property string $RT
 * @property string $RW
 * @property string $Kelurahan
 * @property string $Kecamatan
 * @property string $Kota
 * @property string $Kode_Pos
 * @property string $No_Telp
 * @property string $No_Fax
 * @property string $Website
 * @property string $Email
 * @property string $Tgl_Pendirian
 * @property string $Logo
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 */
class MCreditunion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MCreditunion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_creditunion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('No_BA_Puskopdit, Nama, Badan_Hukum, Alamat, No, RT, RW, Kelurahan, Kecamatan, Kota, Kode_Pos, No_Telp, No_Fax, Website, Email, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'required'),
			array('No_BA_Puskopdit', 'length', 'max'=>13),
			array('Nama', 'length', 'max'=>150),
			array('Badan_Hukum', 'length', 'max'=>100),
			array('Alamat', 'length', 'max'=>300),
			array('No, Kode_Pos', 'length', 'max'=>10),
			array('RT, RW', 'length', 'max'=>3),
			array('Kelurahan, Kecamatan', 'length', 'max'=>75),
			array('Kota, No_Telp, No_Fax, Website, Email, Created_By, Last_Update_By', 'length', 'max'=>50),
			array('Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Tgl_Pendirian, Logo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('No_BA_Puskopdit, Nama, Badan_Hukum, Alamat, No, RT, RW, Kelurahan, Kecamatan, Kota, Kode_Pos, No_Telp, No_Fax, Website, Email, Tgl_Pendirian, Logo, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'safe', 'on'=>'search'),
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
			'No_BA_Puskopdit' => 'No Ba Puskopdit',
			'Nama' => 'Nama',
			'Badan_Hukum' => 'Badan Hukum',
			'Alamat' => 'Alamat',
			'No' => 'No',
			'RT' => 'Rt',
			'RW' => 'Rw',
			'Kelurahan' => 'Kelurahan',
			'Kecamatan' => 'Kecamatan',
			'Kota' => 'Kota',
			'Kode_Pos' => 'Kode Pos',
			'No_Telp' => 'No Telp',
			'No_Fax' => 'No Fax',
			'Website' => 'Website',
			'Email' => 'Email',
			'Tgl_Pendirian' => 'Tgl Pendirian',
			'Logo' => 'Logo',
			'Created_By' => 'Created By',
			'Created_DateTime' => 'Created Date Time',
			'Created_Location' => 'Created Location',
			'Last_Update_By' => 'Last Update By',
			'Last_Update_DateTime' => 'Last Update Date Time',
			'Last_Update_Location' => 'Last Update Location',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('No_BA_Puskopdit',$this->No_BA_Puskopdit,true);
		$criteria->compare('Nama',$this->Nama,true);
		$criteria->compare('Badan_Hukum',$this->Badan_Hukum,true);
		$criteria->compare('Alamat',$this->Alamat,true);
		$criteria->compare('No',$this->No,true);
		$criteria->compare('RT',$this->RT,true);
		$criteria->compare('RW',$this->RW,true);
		$criteria->compare('Kelurahan',$this->Kelurahan,true);
		$criteria->compare('Kecamatan',$this->Kecamatan,true);
		$criteria->compare('Kota',$this->Kota,true);
		$criteria->compare('Kode_Pos',$this->Kode_Pos,true);
		$criteria->compare('No_Telp',$this->No_Telp,true);
		$criteria->compare('No_Fax',$this->No_Fax,true);
		$criteria->compare('Website',$this->Website,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Tgl_Pendirian',$this->Tgl_Pendirian,true);
		$criteria->compare('Logo',$this->Logo,true);
		$criteria->compare('Created_By',$this->Created_By,true);
		$criteria->compare('Created_DateTime',$this->Created_DateTime,true);
		$criteria->compare('Created_Location',$this->Created_Location,true);
		$criteria->compare('Last_Update_By',$this->Last_Update_By,true);
		$criteria->compare('Last_Update_DateTime',$this->Last_Update_DateTime,true);
		$criteria->compare('Last_Update_Location',$this->Last_Update_Location,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}