<?php

/**
 * This is the model class for table "m_simpananharian".
 *
 * The followings are the available columns in table 'm_simpananharian':
 * @property string $No_RekeningSH
 * @property string $Tgl_Masuk_SH
 * @property string $Kode_Golongan
 * @property string $No_BA
 * @property string $Kode_Cabang
 * @property string $No_KTP
 * @property string $Nama
 * @property integer $Jns_Kelamin
 * @property string $Tempat_Lahir
 * @property string $Tgl_Lahir
 * @property integer $Agama
 * @property integer $Status_Perkawinan
 * @property string $Alamat
 * @property string $No
 * @property string $RT
 * @property string $RW
 * @property string $Kelurahan
 * @property string $Kecamatan
 * @property string $Kota
 * @property string $Kode_Pos
 * @property string $No_Telp
 * @property string $No_HP
 * @property string $Email
 * @property string $Alamat_Tinggal
 * @property string $No_Tinggal
 * @property string $RT_Tinggal
 * @property string $RW_Tinggal
 * @property string $Kelurahan_Tinggal
 * @property string $Kecamatan_Tinggal
 * @property string $Kota_Tinggal
 * @property string $Kode_Pos_Tinggal
 * @property integer $Pendidikan_Terakhir
 * @property string $Pekerjaan
 * @property string $Instansi
 * @property string $Alamat_Instansi
 * @property string $No_Telp_Instansi
 * @property string $Nama_Ahli_Waris
 * @property string $Hubungan_Ahli_Waris
 * @property string $Tempat_Lahir_Ahli_Waris
 * @property string $Tgl_Lahir_Ahli_Waris
 * @property string $Foto
 * @property string $Specimen_TTD
 * @property integer $Status_Rekening
 * @property string $Tgl_Keluar
 * @property string $Alasan_Keluar
 * @property string $Saldo_Simpanan
 * @property string $Tgl_Transaksi_Terakhir
 * @property integer $Status_Bunga
 * @property string $Jumlah_Bunga
 * @property double $Print_Line
 * @property double $Print_Line_KSPA
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 */
class MSimpananharian extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MSimpananharian the static model class
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
		return 'm_simpananharian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tgl_Masuk_SH, Kode_Golongan, Kode_Cabang, Nama, Jns_Kelamin, Tgl_Lahir, Agama, Status_Perkawinan, Alamat, Status_Rekening, Tgl_Transaksi_Terakhir, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'required'),
			array('Jns_Kelamin, Agama, Status_Perkawinan, Pendidikan_Terakhir, Status_Rekening, Status_Bunga', 'numerical', 'integerOnly'=>true),
			array('Print_Line, Print_Line_KSPA', 'numerical'),
			array('No_RekeningSH', 'length', 'max'=>13),
			array('Kode_Golongan, Kode_Cabang', 'length', 'max'=>2),
			array('No_BA, No, RT, RW, Kode_Pos, No_Tinggal, RT_Tinggal, RW_Tinggal, Kode_Pos_Tinggal', 'length', 'max'=>10),
			array('No_ID, Nama, Tempat_Lahir, Kelurahan, Kecamatan, Kota, No_Telp, No_HP, Email, Kelurahan_Tinggal, Kecamatan_Tinggal, No_Telp_Instansi, Nama_Ahli_Waris, Hubungan_Ahli_Waris, Tempat_Lahir_Ahli_Waris', 'length', 'max'=>100),
			array('Alamat, Alamat_Tinggal, Pekerjaan, Alamat_Instansi', 'length', 'max'=>250),
			array('Kota_Tinggal', 'length', 'max'=>35),
			array('Instansi', 'length', 'max'=>200),
			array('Alasan_Keluar', 'length', 'max'=>500),
			array('Saldo_Simpanan, Jumlah_Bunga', 'length', 'max'=>19),
			array('Created_By, Last_Update_By', 'length', 'max'=>75),
			array('Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Tgl_Lahir_Ahli_Waris, Foto, Specimen_TTD, Tgl_Keluar', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('No_RekeningSH, Tgl_Masuk_SH, Kode_Golongan, No_BA, Kode_Cabang, No_ID, Nama, Jns_Kelamin, Tempat_Lahir, Tgl_Lahir, Agama, Status_Perkawinan, Alamat, No, RT, RW, Kelurahan, Kecamatan, Kota, Kode_Pos, No_Telp, No_HP, Email, Alamat_Tinggal, No_Tinggal, RT_Tinggal, RW_Tinggal, Kelurahan_Tinggal, Kecamatan_Tinggal, Kota_Tinggal, Kode_Pos_Tinggal, Pendidikan_Terakhir, Pekerjaan, Instansi, Alamat_Instansi, No_Telp_Instansi, Nama_Ahli_Waris, Hubungan_Ahli_Waris, Tempat_Lahir_Ahli_Waris, Tgl_Lahir_Ahli_Waris, Foto, Specimen_TTD, Status_Rekening, Tgl_Keluar, Alasan_Keluar, Saldo_Simpanan, Tgl_Transaksi_Terakhir, Status_Bunga, Jumlah_Bunga, Print_Line, Print_Line_KSPA, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'safe', 'on'=>'search'),
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
			'No_RekeningSH' => 'No Rekening Sh',
			'Tgl_Masuk_SH' => 'Tgl Masuk Sh',
			'Kode_Golongan' => 'Kode Golongan',
			'No_BA' => 'No Ba',
			'Kode_Cabang' => 'Kode Cabang',
			'No_ID' => 'No Identitas',
			'Nama' => 'Nama',
			'Jns_Kelamin' => 'Jns Kelamin',
			'Tempat_Lahir' => 'Tempat Lahir',
			'Tgl_Lahir' => 'Tgl Lahir',
			'Agama' => 'Agama',
			'Status_Perkawinan' => 'Status Perkawinan',
			'Alamat' => 'Alamat',
			'No' => 'No',
			'RT' => 'Rt',
			'RW' => 'Rw',
			'Kelurahan' => 'Kelurahan',
			'Kecamatan' => 'Kecamatan',
			'Kota' => 'Kota',
			'Kode_Pos' => 'Kode Pos',
			'No_Telp' => 'No Telp',
			'No_HP' => 'No Hp',
			'Email' => 'Email',
			'Alamat_Tinggal' => 'Alamat Tinggal',
			'No_Tinggal' => 'No Tinggal',
			'RT_Tinggal' => 'Rt Tinggal',
			'RW_Tinggal' => 'Rw Tinggal',
			'Kelurahan_Tinggal' => 'Kelurahan Tinggal',
			'Kecamatan_Tinggal' => 'Kecamatan Tinggal',
			'Kota_Tinggal' => 'Kota Tinggal',
			'Kode_Pos_Tinggal' => 'Kode Pos Tinggal',
			'Pendidikan_Terakhir' => 'Pendidikan Terakhir',
			'Pekerjaan' => 'Pekerjaan',
			'Instansi' => 'Instansi',
			'Alamat_Instansi' => 'Alamat Instansi',
			'No_Telp_Instansi' => 'No Telp Instansi',
			'Nama_Ahli_Waris' => 'Nama Ahli Waris',
			'Hubungan_Ahli_Waris' => 'Hubungan Ahli Waris',
			'Tempat_Lahir_Ahli_Waris' => 'Tempat Lahir Ahli Waris',
			'Tgl_Lahir_Ahli_Waris' => 'Tgl Lahir Ahli Waris',
			'Foto' => 'Foto',
			'Specimen_TTD' => 'Specimen Ttd',
			'Status_Rekening' => 'Status Rekening',
			'Tgl_Keluar' => 'Tgl Keluar',
			'Alasan_Keluar' => 'Alasan Keluar',
			'Saldo_Simpanan' => 'Saldo Simpanan',
			'Tgl_Transaksi_Terakhir' => 'Tgl Transaksi Terakhir',
			'Status_Bunga' => 'Status Bunga',
			'Jumlah_Bunga' => 'Jumlah Bunga',
			'Print_Line' => 'Print Line',
			'Print_Line_KSPA' => 'Print Line Kspa',
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

		$criteria->compare('No_RekeningSH',$this->No_RekeningSH,true);
		$criteria->compare('Tgl_Masuk_SH',$this->Tgl_Masuk_SH,true);
		$criteria->compare('Kode_Golongan',$this->Kode_Golongan,true);
		$criteria->compare('No_BA',$this->No_BA,true);
		$criteria->compare('Kode_Cabang',$this->Kode_Cabang,true);
		$criteria->compare('No_ID',$this->No_ID,true);
		$criteria->compare('Nama',$this->Nama,true);
		$criteria->compare('Jns_Kelamin',$this->Jns_Kelamin);
		$criteria->compare('Tempat_Lahir',$this->Tempat_Lahir,true);
		$criteria->compare('Tgl_Lahir',$this->Tgl_Lahir,true);
		$criteria->compare('Agama',$this->Agama);
		$criteria->compare('Status_Perkawinan',$this->Status_Perkawinan);
		$criteria->compare('Alamat',$this->Alamat,true);
		$criteria->compare('No',$this->No,true);
		$criteria->compare('RT',$this->RT,true);
		$criteria->compare('RW',$this->RW,true);
		$criteria->compare('Kelurahan',$this->Kelurahan,true);
		$criteria->compare('Kecamatan',$this->Kecamatan,true);
		$criteria->compare('Kota',$this->Kota,true);
		$criteria->compare('Kode_Pos',$this->Kode_Pos,true);
		$criteria->compare('No_Telp',$this->No_Telp,true);
		$criteria->compare('No_HP',$this->No_HP,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Alamat_Tinggal',$this->Alamat_Tinggal,true);
		$criteria->compare('No_Tinggal',$this->No_Tinggal,true);
		$criteria->compare('RT_Tinggal',$this->RT_Tinggal,true);
		$criteria->compare('RW_Tinggal',$this->RW_Tinggal,true);
		$criteria->compare('Kelurahan_Tinggal',$this->Kelurahan_Tinggal,true);
		$criteria->compare('Kecamatan_Tinggal',$this->Kecamatan_Tinggal,true);
		$criteria->compare('Kota_Tinggal',$this->Kota_Tinggal,true);
		$criteria->compare('Kode_Pos_Tinggal',$this->Kode_Pos_Tinggal,true);
		$criteria->compare('Pendidikan_Terakhir',$this->Pendidikan_Terakhir);
		$criteria->compare('Pekerjaan',$this->Pekerjaan,true);
		$criteria->compare('Instansi',$this->Instansi,true);
		$criteria->compare('Alamat_Instansi',$this->Alamat_Instansi,true);
		$criteria->compare('No_Telp_Instansi',$this->No_Telp_Instansi,true);
		$criteria->compare('Nama_Ahli_Waris',$this->Nama_Ahli_Waris,true);
		$criteria->compare('Hubungan_Ahli_Waris',$this->Hubungan_Ahli_Waris,true);
		$criteria->compare('Tempat_Lahir_Ahli_Waris',$this->Tempat_Lahir_Ahli_Waris,true);
		$criteria->compare('Tgl_Lahir_Ahli_Waris',$this->Tgl_Lahir_Ahli_Waris,true);
		$criteria->compare('Foto',$this->Foto,true);
		$criteria->compare('Specimen_TTD',$this->Specimen_TTD,true);
		$criteria->compare('Status_Rekening',$this->Status_Rekening);
		$criteria->compare('Tgl_Keluar',$this->Tgl_Keluar,true);
		$criteria->compare('Alasan_Keluar',$this->Alasan_Keluar,true);
		$criteria->compare('Saldo_Simpanan',$this->Saldo_Simpanan,true);
		$criteria->compare('Tgl_Transaksi_Terakhir',$this->Tgl_Transaksi_Terakhir,true);
		$criteria->compare('Status_Bunga',$this->Status_Bunga);
		$criteria->compare('Jumlah_Bunga',$this->Jumlah_Bunga,true);
		$criteria->compare('Print_Line',$this->Print_Line);
		$criteria->compare('Print_Line_KSPA',$this->Print_Line_KSPA);
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