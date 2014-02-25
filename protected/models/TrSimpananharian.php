<?php

/**
 * This is the model class for table "tr_simpananharian".
 *
 * The followings are the available columns in table 'tr_simpananharian':
 * @property string $Kode_Transaksi
 * @property string $Tgl_Transaksi
 * @property string $No_RekeningSH
 * @property string $Kode_Sandi
 * @property string $Debit
 * @property string $Kredit
 * @property string $Saldo
 * @property string $Keterangan
 * @property integer $Printed
 * @property integer $PrintedX
 * @property integer $PrintedKSPA
 * @property integer $PrintedKSPAX
 * @property string $Kode_Cabang
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 */
class TrSimpananharian extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TrSimpananharian the static model class
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
		return 'tr_simpananharian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tgl_Transaksi, No_RekeningSH, Kode_Sandi, Printed, PrintedX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'required'),
			array('Printed, PrintedX, PrintedKSPA, PrintedKSPAX', 'numerical', 'integerOnly'=>true),
			array('Kode_Transaksi', 'length', 'max'=>10),
			array('No_RekeningSH', 'length', 'max'=>13),
			array('Kode_Sandi', 'length', 'max'=>3),
			array('Debit, Kredit, Saldo', 'length', 'max'=>19),
			array('Keterangan', 'length', 'max'=>200),
			array('Kode_Cabang', 'length', 'max'=>2),
			array('Created_By', 'length', 'max'=>30),
			array('Created_Location', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Kode_Transaksi, Tgl_Transaksi, No_RekeningSH, Kode_Sandi, Debit, Kredit, Saldo, Keterangan, Printed, PrintedX, PrintedKSPA, PrintedKSPAX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'safe', 'on'=>'search'),
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
			'TrMSimpananHarian'=>array(self::BELONGS_TO, 'MSimpananHarian', 'No_RekeningSH', 'order'=>'Tgl_Transaksi DESC'),
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
			'No_RekeningSH' => 'No Rekening Sh',
			'Kode_Sandi' => 'Kode Sandi',
			'Debit' => 'Debit',
			'Kredit' => 'Kredit',
			'Saldo' => 'Saldo',
			'Keterangan' => 'Keterangan',
			'Printed' => 'Printed',
			'PrintedX' => 'Printed X',
			'PrintedKSPA' => 'Printed Kspa',
			'PrintedKSPAX' => 'Printed Kspax',
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
		$criteria->compare('No_RekeningSH',$this->No_RekeningSH,true);
		$criteria->compare('Kode_Sandi',$this->Kode_Sandi,true);
		$criteria->compare('Debit',$this->Debit,true);
		$criteria->compare('Kredit',$this->Kredit,true);
		$criteria->compare('Saldo',$this->Saldo,true);
		$criteria->compare('Keterangan',$this->Keterangan,true);
		$criteria->compare('Printed',$this->Printed);
		$criteria->compare('PrintedX',$this->PrintedX);
		$criteria->compare('PrintedKSPA',$this->PrintedKSPA);
		$criteria->compare('PrintedKSPAX',$this->PrintedKSPAX);
		$criteria->compare('Kode_Cabang',$this->Kode_Cabang,true);
		$criteria->compare('Created_By',$this->Created_By,true);
		$criteria->compare('Created_DateTime',$this->Created_DateTime,true);
		$criteria->compare('Created_Location',$this->Created_Location,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	public function getKodeSandi()
	{
		switch($this->Kode_Sandi)
		{
			case '01':
				return 'Setoran tunai';	
			case '02':
				return 'Jasa';
			case '03':
				return 'Penarikan tunai';
			case '04':
				return 'Jasa simpanan berjangka';
			case '05':
				return 'Sanksi';
			case '06':
				return 'Administrasi';
			case '07':
				return 'Pajak';
			case '08':
				return 'Penarikan pemindahbukuan';
			case '09':
				return 'SHU';
			case '10':
				return 'Koreksi Lebih tunai';
			case '11':
				return 'Koreksi kurang tunai';
			case '12':
				return 'Penutupan rekening tunai';
			case '13':
				return 'Transfer bank';
			case '14':
				return 'Koreksi lebih pemindahbukuan';
			case '15':
				return 'Koreksi kurang pemindahbukuan';
			case '16':
				return 'Setoran pemindahbukuan';
			case '17':
				return 'Penutupan rekening non tunai';
		}
	}
}