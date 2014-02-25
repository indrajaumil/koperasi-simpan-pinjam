<?php

/**
 * This is the model class for table "tr_pinjaman".
 *
 * The followings are the available columns in table 'tr_pinjaman':
 * @property string $Kode_Transaksi
 * @property string $Tgl_Transaksi
 * @property string $No_Pinjaman
 * @property string $Kode_Sandi
 * @property string $Angsuran
 * @property string $Bunga
 * @property string $Denda
 * @property string $Saldo
 * @property string $Bunga_Kurang
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
class TrPinjaman extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TrPinjaman the static model class
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
		return 'tr_pinjaman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tgl_Transaksi, No_Pinjaman, Kode_Sandi, Angsuran, Bunga, Denda, Saldo, Bunga_Kurang, Printed, PrintedX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'required'),
			array('Printed, PrintedX, PrintedKSPA, PrintedKSPAX', 'numerical', 'integerOnly'=>true),
			array('Kode_Transaksi', 'length', 'max'=>10),
			array('No_Pinjaman', 'length', 'max'=>13),
			array('Kode_Sandi', 'length', 'max'=>3),
			array('Angsuran, Bunga, Denda, Saldo, Bunga_Kurang', 'length', 'max'=>19),
			array('Keterangan', 'length', 'max'=>200),
			array('Kode_Cabang', 'length', 'max'=>2),
			array('Created_By', 'length', 'max'=>30),
			array('Created_Location', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Kode_Transaksi, Tgl_Transaksi, No_Pinjaman, Kode_Sandi, Angsuran, Bunga, Denda, Saldo, Bunga_Kurang, Keterangan, Printed, PrintedX, PrintedKSPA, PrintedKSPAX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'safe', 'on'=>'search'),
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
			'TrMPinjaman'=>array(self::BELONGS_TO, 'MPinjaman', 'No_Pinjaman', 'order'=>'Tgl_Transaksi DESC'),
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
			'No_Pinjaman' => 'No Pinjaman',
			'Kode_Sandi' => 'Kode Sandi',
			'Angsuran' => 'Angsuran',
			'Bunga' => 'Bunga',
			'Denda' => 'Denda',
			'Saldo' => 'Saldo',
			'Bunga_Kurang' => 'Bunga Kurang',
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
		$criteria->compare('No_Pinjaman',$this->No_Pinjaman,true);
		$criteria->compare('Kode_Sandi',$this->Kode_Sandi,true);
		$criteria->compare('Angsuran',$this->Angsuran,true);
		$criteria->compare('Bunga',$this->Bunga,true);
		$criteria->compare('Denda',$this->Denda,true);
		$criteria->compare('Saldo',$this->Saldo,true);
		$criteria->compare('Bunga_Kurang',$this->Bunga_Kurang,true);
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
				return 'Pencairan';
			case '03':
				return 'Pemb. tunai jasa kurang';
			case '04':
				return 'Koreksi setor tunai lebih';
			case '05':
				return 'Koreksi setor tunai kurang';
			case '06':
				return 'Transfer bank';
			case '07':
				return 'Setoran pemindahbukuan';
			case '08':
				return 'Pelunasan tunai pinjaman';
			case '09':
				return 'Koreksi pemindahbukuan lebih';
			case '10':
				return 'Koreksi pemindahbukuan kurang';
			case '11':
				return 'Pemb. pemindahbukuan jasa kurang';
			case '12':
				return 'Pelunasan pemindahbukuan pinjaman';
			case '00':
				return 'Pencairan awal';
		}
	}
}