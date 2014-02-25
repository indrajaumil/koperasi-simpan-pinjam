<?php

/**
 * This is the model class for table "m_jenissimpananberjangka".
 *
 * The followings are the available columns in table 'm_jenissimpananberjangka':
 * @property string $Kode_Jenis
 * @property string $Jenis_Simpanan_Berjangka
 * @property string $Deskripsi
 * @property string $Simpanan_Minimum
 * @property string $Biaya_Penerbitan_Sertifikat
 * @property string $Persen_Biaya_Pencairan
 * @property string $Persen_Penalti_Pencairan_SJT
 * @property string $Biaya_Pencairan_Minimum
 * @property string $Parameter_Saldo_Pencairan
 * @property string $Biaya_Ganti_Sertifikat
 * @property string $Penalti_Sebelum_Jatuh_Tempo
 * @property integer $Auto_Rollover
 * @property integer $Status
 * @property integer $Jenis_Perpanjang
 * @property integer $Status_Penalti_Pencairan
 * @property integer $Status_Pembatalan_Jasa
 * @property integer $Status_Berlaku_Jasa
 * @property integer $Jenis_Pembulatan_Jasa
 * @property string $Tgl_Berlaku_Jasa
 * @property string $Persen_Jasa_Berjangka_1Bulan
 * @property string $Persen_Jasa_Berjangka_3Bulan
 * @property string $Persen_Jasa_Berjangka_6Bulan
 * @property string $Persen_Jasa_Berjangka_12Bulan
 * @property string $Persen_Jasa_Berjangka_24Bulan
 * @property string $NP_Kas_SB
 * @property string $NP_Simpanan_Berjangka
 * @property string $NP_Jasa_Simpanan_Berjangka
 * @property string $NP_Biaya_Administrasi_Penerbitan
 * @property string $NP_Biaya_Penggantian_Sertifikat
 * @property string $NP_Biaya_Administrasi_Pencairan
 * @property string $NP_Denda_Pencairan
 * @property string $NP_Non_Tunai
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 */
class MJenissimpananberjangka extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MJenissimpananberjangka the static model class
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
		return 'm_jenissimpananberjangka';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NP_Jasa_Simpanan_Berjangka, NP_Denda_Pencairan, NP_Non_Tunai, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'required'),
			array('Auto_Rollover, Status, Jenis_Perpanjang, Status_Penalti_Pencairan, Status_Pembatalan_Jasa, Status_Berlaku_Jasa, Jenis_Pembulatan_Jasa', 'numerical', 'integerOnly'=>true),
			array('Kode_Jenis', 'length', 'max'=>2),
			array('Jenis_Simpanan_Berjangka', 'length', 'max'=>75),
			array('Deskripsi', 'length', 'max'=>300),
			array('Simpanan_Minimum, Biaya_Penerbitan_Sertifikat, Biaya_Pencairan_Minimum, Parameter_Saldo_Pencairan, Biaya_Ganti_Sertifikat, Penalti_Sebelum_Jatuh_Tempo', 'length', 'max'=>19),
			array('Persen_Biaya_Pencairan, Persen_Penalti_Pencairan_SJT, Persen_Jasa_Berjangka_1Bulan, Persen_Jasa_Berjangka_3Bulan, Persen_Jasa_Berjangka_6Bulan, Persen_Jasa_Berjangka_12Bulan, Persen_Jasa_Berjangka_24Bulan', 'length', 'max'=>6),
			array('NP_Kas_SB, NP_Simpanan_Berjangka, NP_Jasa_Simpanan_Berjangka, NP_Biaya_Administrasi_Penerbitan, NP_Biaya_Penggantian_Sertifikat, NP_Biaya_Administrasi_Pencairan, NP_Denda_Pencairan, NP_Non_Tunai', 'length', 'max'=>14),
			array('Created_By, Last_Update_By', 'length', 'max'=>30),
			array('Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Tgl_Berlaku_Jasa', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Kode_Jenis, Jenis_Simpanan_Berjangka, Deskripsi, Simpanan_Minimum, Biaya_Penerbitan_Sertifikat, Persen_Biaya_Pencairan, Persen_Penalti_Pencairan_SJT, Biaya_Pencairan_Minimum, Parameter_Saldo_Pencairan, Biaya_Ganti_Sertifikat, Penalti_Sebelum_Jatuh_Tempo, Auto_Rollover, Status, Jenis_Perpanjang, Status_Penalti_Pencairan, Status_Pembatalan_Jasa, Status_Berlaku_Jasa, Jenis_Pembulatan_Jasa, Tgl_Berlaku_Jasa, Persen_Jasa_Berjangka_1Bulan, Persen_Jasa_Berjangka_3Bulan, Persen_Jasa_Berjangka_6Bulan, Persen_Jasa_Berjangka_12Bulan, Persen_Jasa_Berjangka_24Bulan, NP_Kas_SB, NP_Simpanan_Berjangka, NP_Jasa_Simpanan_Berjangka, NP_Biaya_Administrasi_Penerbitan, NP_Biaya_Penggantian_Sertifikat, NP_Biaya_Administrasi_Pencairan, NP_Denda_Pencairan, NP_Non_Tunai, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'safe', 'on'=>'search'),
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
			'Kode_Jenis' => 'Kode Jenis',
			'Jenis_Simpanan_Berjangka' => 'Jenis Simpanan Berjangka',
			'Deskripsi' => 'Deskripsi',
			'Simpanan_Minimum' => 'Simpanan Minimum',
			'Biaya_Penerbitan_Sertifikat' => 'Biaya Penerbitan Sertifikat',
			'Persen_Biaya_Pencairan' => 'Persen Biaya Pencairan',
			'Persen_Penalti_Pencairan_SJT' => 'Persen Penalti Pencairan Sjt',
			'Biaya_Pencairan_Minimum' => 'Biaya Pencairan Minimum',
			'Parameter_Saldo_Pencairan' => 'Parameter Saldo Pencairan',
			'Biaya_Ganti_Sertifikat' => 'Biaya Ganti Sertifikat',
			'Penalti_Sebelum_Jatuh_Tempo' => 'Penalti Sebelum Jatuh Tempo',
			'Auto_Rollover' => 'Auto Rollover',
			'Status' => 'Status',
			'Jenis_Perpanjang' => 'Jenis Perpanjang',
			'Status_Penalti_Pencairan' => 'Status Penalti Pencairan',
			'Status_Pembatalan_Jasa' => 'Status Pembatalan Jasa',
			'Status_Berlaku_Jasa' => 'Status Berlaku Jasa',
			'Jenis_Pembulatan_Jasa' => 'Jenis Pembulatan Jasa',
			'Tgl_Berlaku_Jasa' => 'Tgl Berlaku Jasa',
			'Persen_Jasa_Berjangka_1Bulan' => 'Persen Jasa Berjangka 1 Bulan',
			'Persen_Jasa_Berjangka_3Bulan' => 'Persen Jasa Berjangka 3 Bulan',
			'Persen_Jasa_Berjangka_6Bulan' => 'Persen Jasa Berjangka 6 Bulan',
			'Persen_Jasa_Berjangka_12Bulan' => 'Persen Jasa Berjangka 12 Bulan',
			'Persen_Jasa_Berjangka_24Bulan' => 'Persen Jasa Berjangka 24 Bulan',
			'NP_Kas_SB' => 'Np Kas Sb',
			'NP_Simpanan_Berjangka' => 'Np Simpanan Berjangka',
			'NP_Jasa_Simpanan_Berjangka' => 'Np Jasa Simpanan Berjangka',
			'NP_Biaya_Administrasi_Penerbitan' => 'Np Biaya Administrasi Penerbitan',
			'NP_Biaya_Penggantian_Sertifikat' => 'Np Biaya Penggantian Sertifikat',
			'NP_Biaya_Administrasi_Pencairan' => 'Np Biaya Administrasi Pencairan',
			'NP_Denda_Pencairan' => 'Np Denda Pencairan',
			'NP_Non_Tunai' => 'Np Non Tunai',
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

		$criteria->compare('Kode_Jenis',$this->Kode_Jenis,true);
		$criteria->compare('Jenis_Simpanan_Berjangka',$this->Jenis_Simpanan_Berjangka,true);
		$criteria->compare('Deskripsi',$this->Deskripsi,true);
		$criteria->compare('Simpanan_Minimum',$this->Simpanan_Minimum,true);
		$criteria->compare('Biaya_Penerbitan_Sertifikat',$this->Biaya_Penerbitan_Sertifikat,true);
		$criteria->compare('Persen_Biaya_Pencairan',$this->Persen_Biaya_Pencairan,true);
		$criteria->compare('Persen_Penalti_Pencairan_SJT',$this->Persen_Penalti_Pencairan_SJT,true);
		$criteria->compare('Biaya_Pencairan_Minimum',$this->Biaya_Pencairan_Minimum,true);
		$criteria->compare('Parameter_Saldo_Pencairan',$this->Parameter_Saldo_Pencairan,true);
		$criteria->compare('Biaya_Ganti_Sertifikat',$this->Biaya_Ganti_Sertifikat,true);
		$criteria->compare('Penalti_Sebelum_Jatuh_Tempo',$this->Penalti_Sebelum_Jatuh_Tempo,true);
		$criteria->compare('Auto_Rollover',$this->Auto_Rollover);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('Jenis_Perpanjang',$this->Jenis_Perpanjang);
		$criteria->compare('Status_Penalti_Pencairan',$this->Status_Penalti_Pencairan);
		$criteria->compare('Status_Pembatalan_Jasa',$this->Status_Pembatalan_Jasa);
		$criteria->compare('Status_Berlaku_Jasa',$this->Status_Berlaku_Jasa);
		$criteria->compare('Jenis_Pembulatan_Jasa',$this->Jenis_Pembulatan_Jasa);
		$criteria->compare('Tgl_Berlaku_Jasa',$this->Tgl_Berlaku_Jasa,true);
		$criteria->compare('Persen_Jasa_Berjangka_1Bulan',$this->Persen_Jasa_Berjangka_1Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_3Bulan',$this->Persen_Jasa_Berjangka_3Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_6Bulan',$this->Persen_Jasa_Berjangka_6Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_12Bulan',$this->Persen_Jasa_Berjangka_12Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_24Bulan',$this->Persen_Jasa_Berjangka_24Bulan,true);
		$criteria->compare('NP_Kas_SB',$this->NP_Kas_SB,true);
		$criteria->compare('NP_Simpanan_Berjangka',$this->NP_Simpanan_Berjangka,true);
		$criteria->compare('NP_Jasa_Simpanan_Berjangka',$this->NP_Jasa_Simpanan_Berjangka,true);
		$criteria->compare('NP_Biaya_Administrasi_Penerbitan',$this->NP_Biaya_Administrasi_Penerbitan,true);
		$criteria->compare('NP_Biaya_Penggantian_Sertifikat',$this->NP_Biaya_Penggantian_Sertifikat,true);
		$criteria->compare('NP_Biaya_Administrasi_Pencairan',$this->NP_Biaya_Administrasi_Pencairan,true);
		$criteria->compare('NP_Denda_Pencairan',$this->NP_Denda_Pencairan,true);
		$criteria->compare('NP_Non_Tunai',$this->NP_Non_Tunai,true);
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