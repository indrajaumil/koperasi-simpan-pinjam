<?php

/**
 * This is the model class for table "m_anggota".
 *
 * The followings are the available columns in table 'm_anggota':
 * @property string $No_BA
 * @property string $No_urut_BA
 * @property string $Kode_Cabang
 * @property string $Kelompok
 * @property string $Sub_Kelompok
 * @property string $Kode_Jenis
 * @property string $Tgl_Masuk
 * @property string $No_BA_Referensi
 * @property string $Referensi
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
 * @property string $Nama_Ahli_Waris1
 * @property string $Nama_Ahli_Waris2
 * @property string $Nama_Ahli_Waris3
 * @property string $Nama_Ahli_Waris4
 * @property string $Hubungan_Ahli_Waris1
 * @property string $Hubungan_Ahli_Waris2
 * @property string $Hubungan_Ahli_Waris3
 * @property string $Hubungan_Ahli_Waris4
 * @property string $Tempat_Lahir_Ahli_Waris1
 * @property string $Tempat_Lahir_Ahli_Waris2
 * @property string $Tempat_Lahir_Ahli_Waris3
 * @property string $Tempat_Lahir_Ahli_Waris4
 * @property string $Tgl_Lahir_Ahli_Waris1
 * @property string $Tgl_Lahir_Ahli_Waris2
 * @property string $Tgl_Lahir_Ahli_Waris3
 * @property string $Tgl_Lahir_Ahli_Waris4
 * @property string $Catatan_Khusus
 * @property string $Foto
 * @property string $Specimen_TTD
 * @property integer $Status_Orientasi
 * @property string $Tgl_Orientasi
 * @property integer $Status_Keanggotaan
 * @property integer $Kategori_Anggota
 * @property string $Tgl_Keluar
 * @property integer $Kategori_Keluar
 * @property string $Alasan_Keluar
 * @property string $Sisa_Kewajiban
 * @property integer $Status_Sisa_Kewajiban
 * @property string $Tgl_Bayar_Sisa_Kewajiban
 * @property string $AA_Saldo_UP
 * @property string $AA_Saldo_SP
 * @property string $AA_Saldo_SW
 * @property string $AA_Saldo_SS
 * @property string $AA_Saldo_DS
 * @property string $AA_Saldo_SP_Seharusnya
 * @property string $AA_Saldo_SW_Seharusnya
 * @property string $AA_Saldo_DS_Seharusnya
 * @property string $AA_Tgl_Transaksi_UP_Terakhir
 * @property string $AA_Tgl_Transaksi_AA_Terakhir
 * @property string $AA_Tgl_Transaksi_DS_Terakhir
 * @property string $AA_SW_Sampai_Dengan
 * @property double $AA_Print_Line
 * @property double $AA_Print_Line_KSPA
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 */
class MAnggota extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MAnggota the static model class
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
		return 'm_anggota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('No_urut_BA, Tgl_Masuk, Nama, Jns_Kelamin, Agama, Pendidikan_Terakhir, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'required'),
			array('Jns_Kelamin, Agama, Status_Perkawinan, Pendidikan_Terakhir, Status_Orientasi, Status_Keanggotaan, Kategori_Anggota, Kategori_Keluar, Status_Sisa_Kewajiban', 'numerical', 'integerOnly'=>true),
			array('AA_Print_Line, AA_Print_Line_KSPA', 'numerical'),
			array('No_BA, No_BA_Referensi, No, RT, RW, Kode_Pos, No_Tinggal, RT_Tinggal, RW_Tinggal, Kode_Pos_Tinggal', 'length', 'max'=>10),
			array('No_urut_BA, Kelompok, Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Kode_Cabang, Kode_Jenis', 'length', 'max'=>2),
			array('Sub_Kelompok', 'length', 'max'=>8),
			array('Referensi, Jenis_ID, No_ID, Nama, Tempat_Lahir, Kelurahan, Kecamatan, Kota, No_Telp, No_HP, Email, Kelurahan_Tinggal, Kecamatan_Tinggal, Kota_Tinggal, Instansi', 'length', 'max'=>100),
			array('Alamat, Alamat_Tinggal, Alamat_Instansi, Alasan_Keluar', 'length', 'max'=>250),
			array('Pekerjaan, No_Telp_Instansi, Nama_Ahli_Waris1, Nama_Ahli_Waris2, Nama_Ahli_Waris3, Nama_Ahli_Waris4', 'length', 'max'=>50),
			array('Hubungan_Ahli_Waris1, Hubungan_Ahli_Waris2, Hubungan_Ahli_Waris3, Hubungan_Ahli_Waris4, Tempat_Lahir_Ahli_Waris1, Tempat_Lahir_Ahli_Waris2, Tempat_Lahir_Ahli_Waris3, Tempat_Lahir_Ahli_Waris4', 'length', 'max'=>35),
			array('Sisa_Kewajiban, AA_Saldo_UP, AA_Saldo_SP, AA_Saldo_SW, AA_Saldo_SS, AA_Saldo_DS, AA_Saldo_SP_Seharusnya, AA_Saldo_SW_Seharusnya, AA_Saldo_DS_Seharusnya', 'length', 'max'=>19),
			array('Created_By, Last_Update_By', 'length', 'max'=>30),
			array('Tgl_Lahir, Tgl_Lahir_Ahli_Waris1, Tgl_Lahir_Ahli_Waris2, Tgl_Lahir_Ahli_Waris3, Tgl_Lahir_Ahli_Waris4, Catatan_Khusus, Foto, Specimen_TTD, Tgl_Orientasi, Tgl_Keluar, Tgl_Bayar_Sisa_Kewajiban, AA_Tgl_Transaksi_UP_Terakhir, AA_Tgl_Transaksi_AA_Terakhir, AA_Tgl_Transaksi_DS_Terakhir, AA_SW_Sampai_Dengan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('No_BA, No_urut_BA, Kode_Cabang, Kelompok, Sub_Kelompok, Kode_Jenis, Tgl_Masuk, No_BA_Referensi, Referensi, No_ID, Nama, Jns_Kelamin, Tempat_Lahir, Tgl_Lahir, Agama, Status_Perkawinan, Alamat, No, RT, RW, Kelurahan, Kecamatan, Kota, Kode_Pos, No_Telp, No_HP, Email, Alamat_Tinggal, No_Tinggal, RT_Tinggal, RW_Tinggal, Kelurahan_Tinggal, Kecamatan_Tinggal, Kota_Tinggal, Kode_Pos_Tinggal, Pendidikan_Terakhir, Pekerjaan, Instansi, Alamat_Instansi, No_Telp_Instansi, Nama_Ahli_Waris1, Nama_Ahli_Waris2, Nama_Ahli_Waris3, Nama_Ahli_Waris4, Hubungan_Ahli_Waris1, Hubungan_Ahli_Waris2, Hubungan_Ahli_Waris3, Hubungan_Ahli_Waris4, Tempat_Lahir_Ahli_Waris1, Tempat_Lahir_Ahli_Waris2, Tempat_Lahir_Ahli_Waris3, Tempat_Lahir_Ahli_Waris4, Tgl_Lahir_Ahli_Waris1, Tgl_Lahir_Ahli_Waris2, Tgl_Lahir_Ahli_Waris3, Tgl_Lahir_Ahli_Waris4, Catatan_Khusus, Foto, Specimen_TTD, Status_Orientasi, Tgl_Orientasi, Status_Keanggotaan, Kategori_Anggota, Tgl_Keluar, Kategori_Keluar, Alasan_Keluar, Sisa_Kewajiban, Status_Sisa_Kewajiban, Tgl_Bayar_Sisa_Kewajiban, AA_Saldo_UP, AA_Saldo_SP, AA_Saldo_SW, AA_Saldo_SS, AA_Saldo_DS, AA_Saldo_SP_Seharusnya, AA_Saldo_SW_Seharusnya, AA_Saldo_DS_Seharusnya, AA_Tgl_Transaksi_UP_Terakhir, AA_Tgl_Transaksi_AA_Terakhir, AA_Tgl_Transaksi_DS_Terakhir, AA_SW_Sampai_Dengan, AA_Print_Line, AA_Print_Line_KSPA, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'safe', 'on'=>'search'),
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
			'MAnggotaMSimpananHarian'=>array(self::HAS_ONE, 'MSimpananharian', 'No_BA'),
			'MAnggotaMPinjaman'=>array(self::HAS_ONE, 'MPinjaman', 'No_BA'),
			'MAnggotaTrAnggota'=>array(self::HAS_ONE, 'TrAnggota', 'No_BA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'No_BA' => 'No Ba',
			'No_urut_BA' => 'No Urut Ba',
			'Kode_Cabang' => 'Kode Cabang',
			'Kelompok' => 'Kelompok',
			'Sub_Kelompok' => 'Sub Kelompok',
			'Kode_Jenis' => 'Kode Jenis',
			'Tgl_Masuk' => 'Tgl Masuk',
			'No_BA_Referensi' => 'No Ba Referensi',
			'Referensi' => 'Referensi',
                        'Jenis_ID' => 'Jenis Identitas',
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
			'Nama_Ahli_Waris1' => 'Nama Ahli Waris1',
			'Nama_Ahli_Waris2' => 'Nama Ahli Waris2',
			'Nama_Ahli_Waris3' => 'Nama Ahli Waris3',
			'Nama_Ahli_Waris4' => 'Nama Ahli Waris4',
			'Hubungan_Ahli_Waris1' => 'Hubungan Ahli Waris1',
			'Hubungan_Ahli_Waris2' => 'Hubungan Ahli Waris2',
			'Hubungan_Ahli_Waris3' => 'Hubungan Ahli Waris3',
			'Hubungan_Ahli_Waris4' => 'Hubungan Ahli Waris4',
			'Tempat_Lahir_Ahli_Waris1' => 'Tempat Lahir Ahli Waris1',
			'Tempat_Lahir_Ahli_Waris2' => 'Tempat Lahir Ahli Waris2',
			'Tempat_Lahir_Ahli_Waris3' => 'Tempat Lahir Ahli Waris3',
			'Tempat_Lahir_Ahli_Waris4' => 'Tempat Lahir Ahli Waris4',
			'Tgl_Lahir_Ahli_Waris1' => 'Tgl Lahir Ahli Waris1',
			'Tgl_Lahir_Ahli_Waris2' => 'Tgl Lahir Ahli Waris2',
			'Tgl_Lahir_Ahli_Waris3' => 'Tgl Lahir Ahli Waris3',
			'Tgl_Lahir_Ahli_Waris4' => 'Tgl Lahir Ahli Waris4',
			'Catatan_Khusus' => 'Catatan Khusus',
			'Foto' => 'Foto',
			'Specimen_TTD' => 'Specimen Ttd',
			'Status_Orientasi' => 'Status Orientasi',
			'Tgl_Orientasi' => 'Tgl Orientasi',
			'Status_Keanggotaan' => 'Status Keanggotaan',
			'Kategori_Anggota' => 'Kategori Anggota',
			'Tgl_Keluar' => 'Tgl Keluar',
			'Kategori_Keluar' => 'Kategori Keluar',
			'Alasan_Keluar' => 'Alasan Keluar',
			'Sisa_Kewajiban' => 'Sisa Kewajiban',
			'Status_Sisa_Kewajiban' => 'Status Sisa Kewajiban',
			'Tgl_Bayar_Sisa_Kewajiban' => 'Tgl Bayar Sisa Kewajiban',
			'AA_Saldo_UP' => 'Aa Saldo Up',
			'AA_Saldo_SP' => 'Aa Saldo Sp',
			'AA_Saldo_SW' => 'Aa Saldo Sw',
			'AA_Saldo_SS' => 'Aa Saldo Ss',
			'AA_Saldo_DS' => 'Aa Saldo Ds',
			'AA_Saldo_SP_Seharusnya' => 'Aa Saldo Sp Seharusnya',
			'AA_Saldo_SW_Seharusnya' => 'Aa Saldo Sw Seharusnya',
			'AA_Saldo_DS_Seharusnya' => 'Aa Saldo Ds Seharusnya',
			'AA_Tgl_Transaksi_UP_Terakhir' => 'Aa Tgl Transaksi Up Terakhir',
			'AA_Tgl_Transaksi_AA_Terakhir' => 'Aa Tgl Transaksi Aa Terakhir',
			'AA_Tgl_Transaksi_DS_Terakhir' => 'Aa Tgl Transaksi Ds Terakhir',
			'AA_SW_Sampai_Dengan' => 'Aa Sw Sampai Dengan',
			'AA_Print_Line' => 'Aa Print Line',
			'AA_Print_Line_KSPA' => 'Aa Print Line Kspa',
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

		$criteria->compare('No_BA',$this->No_BA,true);
		$criteria->compare('No_urut_BA',$this->No_urut_BA,true);
		$criteria->compare('Kode_Cabang',$this->Kode_Cabang,true);
		$criteria->compare('Kelompok',$this->Kelompok,true);
		$criteria->compare('Sub_Kelompok',$this->Sub_Kelompok,true);
		$criteria->compare('Kode_Jenis',$this->Kode_Jenis,true);
		$criteria->compare('Tgl_Masuk',$this->Tgl_Masuk,true);
		$criteria->compare('No_BA_Referensi',$this->No_BA_Referensi,true);
		$criteria->compare('Referensi',$this->Referensi,true);
		#$criteria->compare('No_KTP',$this->No_KTP,true);
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
		$criteria->compare('Nama_Ahli_Waris1',$this->Nama_Ahli_Waris1,true);
		$criteria->compare('Nama_Ahli_Waris2',$this->Nama_Ahli_Waris2,true);
		$criteria->compare('Nama_Ahli_Waris3',$this->Nama_Ahli_Waris3,true);
		$criteria->compare('Nama_Ahli_Waris4',$this->Nama_Ahli_Waris4,true);
		$criteria->compare('Hubungan_Ahli_Waris1',$this->Hubungan_Ahli_Waris1,true);
		$criteria->compare('Hubungan_Ahli_Waris2',$this->Hubungan_Ahli_Waris2,true);
		$criteria->compare('Hubungan_Ahli_Waris3',$this->Hubungan_Ahli_Waris3,true);
		$criteria->compare('Hubungan_Ahli_Waris4',$this->Hubungan_Ahli_Waris4,true);
		$criteria->compare('Tempat_Lahir_Ahli_Waris1',$this->Tempat_Lahir_Ahli_Waris1,true);
		$criteria->compare('Tempat_Lahir_Ahli_Waris2',$this->Tempat_Lahir_Ahli_Waris2,true);
		$criteria->compare('Tempat_Lahir_Ahli_Waris3',$this->Tempat_Lahir_Ahli_Waris3,true);
		$criteria->compare('Tempat_Lahir_Ahli_Waris4',$this->Tempat_Lahir_Ahli_Waris4,true);
		$criteria->compare('Tgl_Lahir_Ahli_Waris1',$this->Tgl_Lahir_Ahli_Waris1,true);
		$criteria->compare('Tgl_Lahir_Ahli_Waris2',$this->Tgl_Lahir_Ahli_Waris2,true);
		$criteria->compare('Tgl_Lahir_Ahli_Waris3',$this->Tgl_Lahir_Ahli_Waris3,true);
		$criteria->compare('Tgl_Lahir_Ahli_Waris4',$this->Tgl_Lahir_Ahli_Waris4,true);
		$criteria->compare('Catatan_Khusus',$this->Catatan_Khusus,true);
		$criteria->compare('Foto',$this->Foto,true);
		$criteria->compare('Specimen_TTD',$this->Specimen_TTD,true);
		$criteria->compare('Status_Orientasi',$this->Status_Orientasi);
		$criteria->compare('Tgl_Orientasi',$this->Tgl_Orientasi,true);
		$criteria->compare('Status_Keanggotaan',$this->Status_Keanggotaan);
		$criteria->compare('Kategori_Anggota',$this->Kategori_Anggota);
		$criteria->compare('Tgl_Keluar',$this->Tgl_Keluar,true);
		$criteria->compare('Kategori_Keluar',$this->Kategori_Keluar);
		$criteria->compare('Alasan_Keluar',$this->Alasan_Keluar,true);
		$criteria->compare('Sisa_Kewajiban',$this->Sisa_Kewajiban,true);
		$criteria->compare('Status_Sisa_Kewajiban',$this->Status_Sisa_Kewajiban);
		$criteria->compare('Tgl_Bayar_Sisa_Kewajiban',$this->Tgl_Bayar_Sisa_Kewajiban,true);
		$criteria->compare('AA_Saldo_UP',$this->AA_Saldo_UP,true);
		$criteria->compare('AA_Saldo_SP',$this->AA_Saldo_SP,true);
		$criteria->compare('AA_Saldo_SW',$this->AA_Saldo_SW,true);
		$criteria->compare('AA_Saldo_SS',$this->AA_Saldo_SS,true);
		$criteria->compare('AA_Saldo_DS',$this->AA_Saldo_DS,true);
		$criteria->compare('AA_Saldo_SP_Seharusnya',$this->AA_Saldo_SP_Seharusnya,true);
		$criteria->compare('AA_Saldo_SW_Seharusnya',$this->AA_Saldo_SW_Seharusnya,true);
		$criteria->compare('AA_Saldo_DS_Seharusnya',$this->AA_Saldo_DS_Seharusnya,true);
		$criteria->compare('AA_Tgl_Transaksi_UP_Terakhir',$this->AA_Tgl_Transaksi_UP_Terakhir,true);
		$criteria->compare('AA_Tgl_Transaksi_AA_Terakhir',$this->AA_Tgl_Transaksi_AA_Terakhir,true);
		$criteria->compare('AA_Tgl_Transaksi_DS_Terakhir',$this->AA_Tgl_Transaksi_DS_Terakhir,true);
		$criteria->compare('AA_SW_Sampai_Dengan',$this->AA_SW_Sampai_Dengan,true);
		$criteria->compare('AA_Print_Line',$this->AA_Print_Line);
		$criteria->compare('AA_Print_Line_KSPA',$this->AA_Print_Line_KSPA);
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