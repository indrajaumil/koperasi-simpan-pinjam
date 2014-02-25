<?php

/**
 * This is the model class for table "tr_simpananberjangka_rollover".
 *
 * The followings are the available columns in table 'tr_simpananberjangka_rollover':
 * @property string $Kode_Transaksi
 * @property string $Tgl_Transaksi
 * @property string $No_SertifikatSB
 * @property string $Kode_Sandi
 * @property string $Debit
 * @property string $Kredit
 * @property string $Saldo
 * @property string $Keterangan
 * @property integer $Printed
 * @property integer $PrintedX
 * @property string $Kode_Cabang
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 */
class TrSimpananberjangkaRollover extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TrSimpananberjangkaRollover the static model class
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
		return 'tr_simpananberjangka_rollover';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tgl_Transaksi, No_SertifikatSB, Kode_Sandi, Printed, PrintedX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'required'),
			array('Printed, PrintedX', 'numerical', 'integerOnly'=>true),
			array('Kode_Transaksi', 'length', 'max'=>10),
			array('No_SertifikatSB', 'length', 'max'=>13),
			array('Kode_Sandi', 'length', 'max'=>3),
			array('Debit, Kredit, Saldo', 'length', 'max'=>19),
			array('Keterangan', 'length', 'max'=>200),
			array('Kode_Cabang', 'length', 'max'=>2),
			array('Created_By', 'length', 'max'=>30),
			array('Created_Location', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Kode_Transaksi, Tgl_Transaksi, No_SertifikatSB, Kode_Sandi, Debit, Kredit, Saldo, Keterangan, Printed, PrintedX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'safe', 'on'=>'search'),
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
			'SimpananBerjangkaRollover'=>array(self::BELONGS_TO, 'MSimpananberjangka', 'No_SertifikatSB', 'with'=>array('MSimpHarianMSimpBerjangka', 'MJenisMSimpananBerjangka')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Kode_Transaksi' => 'Kode Transaksi',
			'Tgl_Transaksi' => 'Tgl Transaksi',
			'No_SertifikatSB' => 'No Sertifikat Sb',
			'Kode_Sandi' => 'Kode Sandi',
			'Debit' => 'Debit',
			'Kredit' => 'Kredit',
			'Saldo' => 'Saldo',
			'Keterangan' => 'Keterangan',
			'Printed' => 'Printed',
			'PrintedX' => 'Printed X',
			'Kode_Cabang' => 'Kode Cabang',
			'Created_By' => 'Created By',
			'Created_DateTime' => 'Created Date Time',
			'Created_Location' => 'Created Location',
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

		$criteria->compare('Kode_Transaksi',$this->Kode_Transaksi,true);
		$criteria->compare('Tgl_Transaksi',$this->Tgl_Transaksi,true);
		$criteria->compare('No_SertifikatSB',$this->No_SertifikatSB,true);
		$criteria->compare('Kode_Sandi',$this->Kode_Sandi,true);
		$criteria->compare('Debit',$this->Debit,true);
		$criteria->compare('Kredit',$this->Kredit,true);
		$criteria->compare('Saldo',$this->Saldo,true);
		$criteria->compare('Keterangan',$this->Keterangan,true);
		$criteria->compare('Printed',$this->Printed);
		$criteria->compare('PrintedX',$this->PrintedX);
		$criteria->compare('Kode_Cabang',$this->Kode_Cabang,true);
		$criteria->compare('Created_By',$this->Created_By,true);
		$criteria->compare('Created_DateTime',$this->Created_DateTime,true);
		$criteria->compare('Created_Location',$this->Created_Location,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	public function getKodeTransaksi()
	{
		switch($this->Kode_Sandi)
		{
			case '04':
				return 'Jasa berjangka';
			case '05':
				return 'Sanksi';
			case '06':
				return 'Administrasi';
			case '07':
				return 'Pph';
			case '12':
				return 'Penutupan simpanan berjangka';
			default: return '';
		}
	}
}