<?php

/**
 * This is the model class for table "q_simpananberjangka_simpananharian_cabang".
 *
 * The followings are the available columns in table 'q_simpananberjangka_simpananharian_cabang':
 * @property string $No_SertifikatSB
 * @property string $Kode_Cabang
 * @property string $Nama_Cabang
 * @property string $No_RekeningSH
 * @property string $No_BA
 * @property string $No_KTP
 * @property string $Nama
 * @property string $Kode_Jenis
 * @property string $Jenis_Simpanan_Berjangka
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
 * @property string $Jml_Simpanan
 * @property integer $Jangka_Waktu
 * @property string $Suku_Bunga
 * @property string $Tgl_Mulai
 * @property string $Jatuh_Tempo_Awal
 * @property string $Jatuh_Tempo_Sekarang
 * @property string $Jml_Bunga
 * @property integer $Status_Sertifikat
 * @property integer $Auto_Rollover
 * @property string $Tgl_Pencairan
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Biaya_Admin_Pencairan
 * @property string $Denda
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 * @property string $Simpanan_Minimum
 * @property string $Biaya_Penerbitan_Sertifikat
 * @property string $Persen_Biaya_Pencairan
 * @property string $Persen_Penalti_Pencairan_SJT
 * @property string $Biaya_Pencairan_Minimum
 * @property string $Parameter_Saldo_Pencairan
 * @property string $Biaya_Ganti_Sertifikat
 * @property string $Penalti_Sebelum_Jatuh_Tempo
 * @property integer $Jenis_Perpanjang
 * @property string $Persen_Jasa_Berjangka_1Bulan
 * @property string $Persen_Jasa_Berjangka_3Bulan
 * @property string $Persen_Jasa_Berjangka_6Bulan
 * @property string $Persen_Jasa_Berjangka_12Bulan
 * @property string $Persen_Jasa_Berjangka_24Bulan
 * @property string $NP_Kas_SB
 * @property string $NP_Simpanan_Berjangka
 * @property string $NP_Biaya_Administrasi_Penerbitan
 * @property string $NP_Biaya_Penggantian_Sertifikat
 * @property string $NP_Biaya_Administrasi_Pencairan
 * @property string $NP_Denda_Pencairan
 * @property integer $Status_Penalti_Pencairan
 * @property integer $Status_Pembatalan_Jasa
 * @property integer $Status_Berlaku_Jasa
 * @property string $Tgl_Berlaku_Jasa
 * @property string $NP_SH
 * @property string $NP_Jasa_Deposito
 * @property string $Nama_Manajer_Cabang
 * @property string $RAK_Aktiva
 * @property string $RAK_Pasiva
 * @property string $NP_Non_Tunai
 * @property string $NP_Jasa_Simpanan_Berjangka
 * @property integer $Jenis_Pembulatan_Jasa
 */
class QSimpananberjangkaSimpananharianCabang extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return QSimpananberjangkaSimpananharianCabang the static model class
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
		return 'q_simpananberjangka_simpananharian_cabang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Kode_Cabang, Nama_Cabang, Nama, Jns_Kelamin, Tgl_Lahir, Agama, Status_Perkawinan, Alamat, Jml_Simpanan, Jangka_Waktu, Suku_Bunga, Tgl_Mulai, Jatuh_Tempo_Awal, Jatuh_Tempo_Sekarang, Status_Sertifikat, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location, NP_Denda_Pencairan, NP_Non_Tunai, NP_Jasa_Simpanan_Berjangka', 'required'),
			array('Jns_Kelamin, Agama, Status_Perkawinan, Pendidikan_Terakhir, Jangka_Waktu, Status_Sertifikat, Auto_Rollover, Jenis_Perpanjang, Status_Penalti_Pencairan, Status_Pembatalan_Jasa, Status_Berlaku_Jasa, Jenis_Pembulatan_Jasa', 'numerical', 'integerOnly'=>true),
			array('No_SertifikatSB, No_RekeningSH', 'length', 'max'=>13),
			array('Kode_Cabang, Kode_Jenis', 'length', 'max'=>2),
			array('Nama_Cabang', 'length', 'max'=>20),
			array('No_BA, No, RT, RW, Kode_Pos, No_Tinggal, RT_Tinggal, RW_Tinggal, Kode_Pos_Tinggal', 'length', 'max'=>10),
			array('No_ID, Nama, Tempat_Lahir, Kelurahan, Kecamatan, Kota, No_Telp, No_HP, Email, Kelurahan_Tinggal, Kecamatan_Tinggal, No_Telp_Instansi', 'length', 'max'=>100),
			array('Jenis_Simpanan_Berjangka', 'length', 'max'=>75),
			array('Alamat, Alamat_Tinggal, Pekerjaan, Alamat_Instansi', 'length', 'max'=>250),
			array('Kota_Tinggal', 'length', 'max'=>35),
			array('Instansi', 'length', 'max'=>200),
			array('Jml_Simpanan, Jml_Bunga, Biaya_Admin_Pencairan, Denda, Simpanan_Minimum, Biaya_Penerbitan_Sertifikat, Biaya_Pencairan_Minimum, Parameter_Saldo_Pencairan, Biaya_Ganti_Sertifikat, Penalti_Sebelum_Jatuh_Tempo', 'length', 'max'=>19),
			array('Suku_Bunga, Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Created_By, Last_Update_By', 'length', 'max'=>30),
			array('Persen_Biaya_Pencairan, Persen_Penalti_Pencairan_SJT, Persen_Jasa_Berjangka_1Bulan, Persen_Jasa_Berjangka_3Bulan, Persen_Jasa_Berjangka_6Bulan, Persen_Jasa_Berjangka_12Bulan, Persen_Jasa_Berjangka_24Bulan', 'length', 'max'=>6),
			array('NP_Kas_SB, NP_Simpanan_Berjangka, NP_Biaya_Administrasi_Penerbitan, NP_Biaya_Penggantian_Sertifikat, NP_Biaya_Administrasi_Pencairan, NP_Denda_Pencairan, NP_SH, NP_Jasa_Deposito, RAK_Aktiva, RAK_Pasiva, NP_Non_Tunai, NP_Jasa_Simpanan_Berjangka', 'length', 'max'=>14),
			array('Nama_Manajer_Cabang', 'length', 'max'=>50),
			array('Tgl_Pencairan, Tgl_Berlaku_Jasa', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('No_SertifikatSB, Kode_Cabang, Nama_Cabang, No_RekeningSH, No_BA, No_ID, Nama, Kode_Jenis, Jenis_Simpanan_Berjangka, Jns_Kelamin, Tempat_Lahir, Tgl_Lahir, Agama, Status_Perkawinan, Alamat, No, RT, RW, Kelurahan, Kecamatan, Kota, Kode_Pos, No_Telp, No_HP, Email, Alamat_Tinggal, No_Tinggal, RT_Tinggal, RW_Tinggal, Kelurahan_Tinggal, Kecamatan_Tinggal, Kota_Tinggal, Kode_Pos_Tinggal, Pendidikan_Terakhir, Pekerjaan, Instansi, Alamat_Instansi, No_Telp_Instansi, Jml_Simpanan, Jangka_Waktu, Suku_Bunga, Tgl_Mulai, Jatuh_Tempo_Awal, Jatuh_Tempo_Sekarang, Jml_Bunga, Status_Sertifikat, Auto_Rollover, Tgl_Pencairan, Created_By, Created_DateTime, Created_Location, Biaya_Admin_Pencairan, Denda, Last_Update_By, Last_Update_DateTime, Last_Update_Location, Simpanan_Minimum, Biaya_Penerbitan_Sertifikat, Persen_Biaya_Pencairan, Persen_Penalti_Pencairan_SJT, Biaya_Pencairan_Minimum, Parameter_Saldo_Pencairan, Biaya_Ganti_Sertifikat, Penalti_Sebelum_Jatuh_Tempo, Jenis_Perpanjang, Persen_Jasa_Berjangka_1Bulan, Persen_Jasa_Berjangka_3Bulan, Persen_Jasa_Berjangka_6Bulan, Persen_Jasa_Berjangka_12Bulan, Persen_Jasa_Berjangka_24Bulan, NP_Kas_SB, NP_Simpanan_Berjangka, NP_Biaya_Administrasi_Penerbitan, NP_Biaya_Penggantian_Sertifikat, NP_Biaya_Administrasi_Pencairan, NP_Denda_Pencairan, Status_Penalti_Pencairan, Status_Pembatalan_Jasa, Status_Berlaku_Jasa, Tgl_Berlaku_Jasa, NP_SH, NP_Jasa_Deposito, Nama_Manajer_Cabang, RAK_Aktiva, RAK_Pasiva, NP_Non_Tunai, NP_Jasa_Simpanan_Berjangka, Jenis_Pembulatan_Jasa', 'safe', 'on'=>'search'),
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
			'No_SertifikatSB' => 'No Sertifikat Sb',
			'Kode_Cabang' => 'Kode Cabang',
			'Nama_Cabang' => 'Nama Cabang',
			'No_RekeningSH' => 'No Rekening Sh',
			'No_BA' => 'No Ba',
			'No_ID' => 'No Identitas',
			'Nama' => 'Nama',
			'Kode_Jenis' => 'Kode Jenis',
			'Jenis_Simpanan_Berjangka' => 'Jenis Simpanan Berjangka',
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
			'Jml_Simpanan' => 'Jml Simpanan',
			'Jangka_Waktu' => 'Jangka Waktu',
			'Suku_Bunga' => 'Suku Bunga',
			'Tgl_Mulai' => 'Tgl Mulai',
			'Jatuh_Tempo_Awal' => 'Jatuh Tempo Awal',
			'Jatuh_Tempo_Sekarang' => 'Jatuh Tempo Sekarang',
			'Jml_Bunga' => 'Jml Bunga',
			'Status_Sertifikat' => 'Status Sertifikat',
			'Auto_Rollover' => 'Auto Rollover',
			'Tgl_Pencairan' => 'Tgl Pencairan',
			'Created_By' => 'Created By',
			'Created_DateTime' => 'Created Date Time',
			'Created_Location' => 'Created Location',
			'Biaya_Admin_Pencairan' => 'Biaya Admin Pencairan',
			'Denda' => 'Denda',
			'Last_Update_By' => 'Last Update By',
			'Last_Update_DateTime' => 'Last Update Date Time',
			'Last_Update_Location' => 'Last Update Location',
			'Simpanan_Minimum' => 'Simpanan Minimum',
			'Biaya_Penerbitan_Sertifikat' => 'Biaya Penerbitan Sertifikat',
			'Persen_Biaya_Pencairan' => 'Persen Biaya Pencairan',
			'Persen_Penalti_Pencairan_SJT' => 'Persen Penalti Pencairan Sjt',
			'Biaya_Pencairan_Minimum' => 'Biaya Pencairan Minimum',
			'Parameter_Saldo_Pencairan' => 'Parameter Saldo Pencairan',
			'Biaya_Ganti_Sertifikat' => 'Biaya Ganti Sertifikat',
			'Penalti_Sebelum_Jatuh_Tempo' => 'Penalti Sebelum Jatuh Tempo',
			'Jenis_Perpanjang' => 'Jenis Perpanjang',
			'Persen_Jasa_Berjangka_1Bulan' => 'Persen Jasa Berjangka 1 Bulan',
			'Persen_Jasa_Berjangka_3Bulan' => 'Persen Jasa Berjangka 3 Bulan',
			'Persen_Jasa_Berjangka_6Bulan' => 'Persen Jasa Berjangka 6 Bulan',
			'Persen_Jasa_Berjangka_12Bulan' => 'Persen Jasa Berjangka 12 Bulan',
			'Persen_Jasa_Berjangka_24Bulan' => 'Persen Jasa Berjangka 24 Bulan',
			'NP_Kas_SB' => 'Np Kas Sb',
			'NP_Simpanan_Berjangka' => 'Np Simpanan Berjangka',
			'NP_Biaya_Administrasi_Penerbitan' => 'Np Biaya Administrasi Penerbitan',
			'NP_Biaya_Penggantian_Sertifikat' => 'Np Biaya Penggantian Sertifikat',
			'NP_Biaya_Administrasi_Pencairan' => 'Np Biaya Administrasi Pencairan',
			'NP_Denda_Pencairan' => 'Np Denda Pencairan',
			'Status_Penalti_Pencairan' => 'Status Penalti Pencairan',
			'Status_Pembatalan_Jasa' => 'Status Pembatalan Jasa',
			'Status_Berlaku_Jasa' => 'Status Berlaku Jasa',
			'Tgl_Berlaku_Jasa' => 'Tgl Berlaku Jasa',
			'NP_SH' => 'Np Sh',
			'NP_Jasa_Deposito' => 'Np Jasa Deposito',
			'Nama_Manajer_Cabang' => 'Nama Manajer Cabang',
			'RAK_Aktiva' => 'Rak Aktiva',
			'RAK_Pasiva' => 'Rak Pasiva',
			'NP_Non_Tunai' => 'Np Non Tunai',
			'NP_Jasa_Simpanan_Berjangka' => 'Np Jasa Simpanan Berjangka',
			'Jenis_Pembulatan_Jasa' => 'Jenis Pembulatan Jasa',
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

		$criteria->compare('No_SertifikatSB',$this->No_SertifikatSB,true);
		$criteria->compare('Kode_Cabang',$this->Kode_Cabang,true);
		$criteria->compare('Nama_Cabang',$this->Nama_Cabang,true);
		$criteria->compare('No_RekeningSH',$this->No_RekeningSH,true);
		$criteria->compare('No_BA',$this->No_BA,true);
		$criteria->compare('No_ID',$this->No_ID,true);
		$criteria->compare('Nama',$this->Nama,true);
		$criteria->compare('Kode_Jenis',$this->Kode_Jenis,true);
		$criteria->compare('Jenis_Simpanan_Berjangka',$this->Jenis_Simpanan_Berjangka,true);
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
		$criteria->compare('Jml_Simpanan',$this->Jml_Simpanan,true);
		$criteria->compare('Jangka_Waktu',$this->Jangka_Waktu);
		$criteria->compare('Suku_Bunga',$this->Suku_Bunga,true);
		$criteria->compare('Tgl_Mulai',$this->Tgl_Mulai,true);
		$criteria->compare('Jatuh_Tempo_Awal',$this->Jatuh_Tempo_Awal,true);
		$criteria->compare('Jatuh_Tempo_Sekarang',$this->Jatuh_Tempo_Sekarang,true);
		$criteria->compare('Jml_Bunga',$this->Jml_Bunga,true);
		$criteria->compare('Status_Sertifikat',$this->Status_Sertifikat);
		$criteria->compare('Auto_Rollover',$this->Auto_Rollover);
		$criteria->compare('Tgl_Pencairan',$this->Tgl_Pencairan,true);
		$criteria->compare('Created_By',$this->Created_By,true);
		$criteria->compare('Created_DateTime',$this->Created_DateTime,true);
		$criteria->compare('Created_Location',$this->Created_Location,true);
		$criteria->compare('Biaya_Admin_Pencairan',$this->Biaya_Admin_Pencairan,true);
		$criteria->compare('Denda',$this->Denda,true);
		$criteria->compare('Last_Update_By',$this->Last_Update_By,true);
		$criteria->compare('Last_Update_DateTime',$this->Last_Update_DateTime,true);
		$criteria->compare('Last_Update_Location',$this->Last_Update_Location,true);
		$criteria->compare('Simpanan_Minimum',$this->Simpanan_Minimum,true);
		$criteria->compare('Biaya_Penerbitan_Sertifikat',$this->Biaya_Penerbitan_Sertifikat,true);
		$criteria->compare('Persen_Biaya_Pencairan',$this->Persen_Biaya_Pencairan,true);
		$criteria->compare('Persen_Penalti_Pencairan_SJT',$this->Persen_Penalti_Pencairan_SJT,true);
		$criteria->compare('Biaya_Pencairan_Minimum',$this->Biaya_Pencairan_Minimum,true);
		$criteria->compare('Parameter_Saldo_Pencairan',$this->Parameter_Saldo_Pencairan,true);
		$criteria->compare('Biaya_Ganti_Sertifikat',$this->Biaya_Ganti_Sertifikat,true);
		$criteria->compare('Penalti_Sebelum_Jatuh_Tempo',$this->Penalti_Sebelum_Jatuh_Tempo,true);
		$criteria->compare('Jenis_Perpanjang',$this->Jenis_Perpanjang);
		$criteria->compare('Persen_Jasa_Berjangka_1Bulan',$this->Persen_Jasa_Berjangka_1Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_3Bulan',$this->Persen_Jasa_Berjangka_3Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_6Bulan',$this->Persen_Jasa_Berjangka_6Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_12Bulan',$this->Persen_Jasa_Berjangka_12Bulan,true);
		$criteria->compare('Persen_Jasa_Berjangka_24Bulan',$this->Persen_Jasa_Berjangka_24Bulan,true);
		$criteria->compare('NP_Kas_SB',$this->NP_Kas_SB,true);
		$criteria->compare('NP_Simpanan_Berjangka',$this->NP_Simpanan_Berjangka,true);
		$criteria->compare('NP_Biaya_Administrasi_Penerbitan',$this->NP_Biaya_Administrasi_Penerbitan,true);
		$criteria->compare('NP_Biaya_Penggantian_Sertifikat',$this->NP_Biaya_Penggantian_Sertifikat,true);
		$criteria->compare('NP_Biaya_Administrasi_Pencairan',$this->NP_Biaya_Administrasi_Pencairan,true);
		$criteria->compare('NP_Denda_Pencairan',$this->NP_Denda_Pencairan,true);
		$criteria->compare('Status_Penalti_Pencairan',$this->Status_Penalti_Pencairan);
		$criteria->compare('Status_Pembatalan_Jasa',$this->Status_Pembatalan_Jasa);
		$criteria->compare('Status_Berlaku_Jasa',$this->Status_Berlaku_Jasa);
		$criteria->compare('Tgl_Berlaku_Jasa',$this->Tgl_Berlaku_Jasa,true);
		$criteria->compare('NP_SH',$this->NP_SH,true);
		$criteria->compare('NP_Jasa_Deposito',$this->NP_Jasa_Deposito,true);
		$criteria->compare('Nama_Manajer_Cabang',$this->Nama_Manajer_Cabang,true);
		$criteria->compare('RAK_Aktiva',$this->RAK_Aktiva,true);
		$criteria->compare('RAK_Pasiva',$this->RAK_Pasiva,true);
		$criteria->compare('NP_Non_Tunai',$this->NP_Non_Tunai,true);
		$criteria->compare('NP_Jasa_Simpanan_Berjangka',$this->NP_Jasa_Simpanan_Berjangka,true);
		$criteria->compare('Jenis_Pembulatan_Jasa',$this->Jenis_Pembulatan_Jasa);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}