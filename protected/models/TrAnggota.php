<?php

/**
 * This is the model class for table "tr_anggota".
 *
 * The followings are the available columns in table 'tr_anggota':
 * @property string $Kode_Transaksi
 * @property string $Tgl_Transaksi
 * @property string $No_BA
 * @property string $Kode_Sandi
 * @property string $Jml_SP
 * @property string $Jml_SW
 * @property string $Jml_SS
 * @property string $Saldo_SP
 * @property string $Saldo_SW
 * @property string $Saldo_SS
 * @property string $Saldo
 * @property double $Saham
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
class TrAnggota extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TrAnggota the static model class
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
		return 'tr_anggota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tgl_Transaksi, No_BA, Kode_Sandi, Jml_SW, Jml_SS, Saldo_SP, Saldo_SW, Saldo_SS, Saldo, Saham, Printed, PrintedX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'required'),
			array('Printed, PrintedX, PrintedKSPA, PrintedKSPAX', 'numerical', 'integerOnly'=>true),
			array('Saham', 'numerical'),
			array('Kode_Transaksi, No_BA', 'length', 'max'=>10),
			array('Kode_Sandi, Kode_Cabang', 'length', 'max'=>2),
			array('Jml_SP, Jml_SW, Jml_SS, Saldo_SP, Saldo_SW, Saldo_SS, Saldo', 'length', 'max'=>19),
			array('Keterangan', 'length', 'max'=>200),
			array('Created_By', 'length', 'max'=>30),
			array('Created_Location', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Kode_Transaksi, Tgl_Transaksi, No_BA, Kode_Sandi, Jml_SP, Jml_SW, Jml_SS, Saldo_SP, Saldo_SW, Saldo_SS, Saldo, Saham, Keterangan, Printed, PrintedX, PrintedKSPA, PrintedKSPAX, Kode_Cabang, Created_By, Created_DateTime, Created_Location', 'safe', 'on'=>'search'),
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
			'Kode_Transaksi' => 'Kode Transaksi',
			'Tgl_Transaksi' => 'Tgl Transaksi',
			'No_BA' => 'No Ba',
			'Kode_Sandi' => 'Kode Sandi',
			'Jml_SP' => 'Jml Sp',
			'Jml_SW' => 'Jml Sw',
			'Jml_SS' => 'Jml Ss',
			'Saldo_SP' => 'Saldo Sp',
			'Saldo_SW' => 'Saldo Sw',
			'Saldo_SS' => 'Saldo Ss',
			'Saldo' => 'Saldo',
			'Saham' => 'Saham',
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
		$criteria->compare('No_BA',$this->No_BA,true);
		$criteria->compare('Kode_Sandi',$this->Kode_Sandi,true);
		$criteria->compare('Jml_SP',$this->Jml_SP,true);
		$criteria->compare('Jml_SW',$this->Jml_SW,true);
		$criteria->compare('Jml_SS',$this->Jml_SS,true);
		$criteria->compare('Saldo_SP',$this->Saldo_SP,true);
		$criteria->compare('Saldo_SW',$this->Saldo_SW,true);
		$criteria->compare('Saldo_SS',$this->Saldo_SS,true);
		$criteria->compare('Saldo',$this->Saldo,true);
		$criteria->compare('Saham',$this->Saham);
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
				return 'Penarikan tunai';
			case '03':
				return 'Koreksi kurang tunai';
			case '04':
				return 'Koreksi lebih tunai';
			case '05':
				return 'Set tunai penyesuaian';
			case '06':
				return 'Set Pemindahbukuan';
			case '07':
				return 'Transfer Bank';
			case '08':
				return 'SHU';
			case '09':
				return 'Penutupan Anggota';
			case '10':
				return 'Penarikan non tunai';
			case '11':
				return 'Koreksi kurang pemindahbukuan';
			case '12':
				return 'Koreksi lebih pemindahbukuan';
			case '13':
				return 'Penutupan anggota non tunai';
			case '14':
				return 'Set penyesuaian pemindahbukuan';
		}
	}
}