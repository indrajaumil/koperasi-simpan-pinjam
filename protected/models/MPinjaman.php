<?php

/**
 * This is the model class for table "m_pinjaman".
 *
 * The followings are the available columns in table 'm_pinjaman':
 * @property string $No_Pinjaman
 * @property string $Tgl_Pinjam
 * @property string $No_Pengajuan
 * @property string $Kode_Cabang
 * @property string $No_BA
 * @property string $Tujuan_Pinjaman
 * @property integer $Kategori
 * @property string $Jenis_Pinjaman
 * @property integer $Jenis_Pembayaran
 * @property integer $Jenis_Angsuran
 * @property string $Jumlah_Pinjaman
 * @property string $Suku_Bunga
 * @property string $Persen_Denda
 * @property string $Besar_Denda
 * @property integer $Jangka_Waktu
 * @property string $No_Jaminan
 * @property string $Service_Fee
 * @property string $Saldo_Pinjaman
 * @property integer $Status_Pinjaman
 * @property string $Tgl_Angsur_Terakhir
 * @property string $Tgl_Realisasi
 * @property double $Print_Line
 * @property double $Print_Line_Pinjaman
 * @property string $Akumulasi_Kekurangan_Bunga
 * @property integer $Mutasi
 * @property string $Tgl_Mutasi
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 */
class MPinjaman extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MPinjaman the static model class
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
		return 'm_pinjaman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('No_Pinjaman, Tgl_Pinjam, No_Pengajuan, Kode_Cabang, No_BA, Tujuan_Pinjaman, Kategori, Jenis_Pinjaman, Jenis_Pembayaran, Jenis_Angsuran, Jumlah_Pinjaman, Suku_Bunga, Persen_Denda, Besar_Denda, Jangka_Waktu, Service_Fee, Saldo_Pinjaman, Status_Pinjaman, Tgl_Angsur_Terakhir, Tgl_Realisasi, Print_Line, Akumulasi_Kekurangan_Bunga, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'required'),
			array('Kategori, Jenis_Pembayaran, Jenis_Angsuran, Jangka_Waktu, Status_Pinjaman, Mutasi', 'numerical', 'integerOnly'=>true),
			array('Print_Line, Print_Line_Pinjaman', 'numerical'),
			array('No_Pinjaman', 'length', 'max'=>13),
			array('No_Pengajuan', 'length', 'max'=>17),
			array('Kode_Cabang, Jenis_Pinjaman', 'length', 'max'=>2),
			array('No_BA, No_Jaminan', 'length', 'max'=>10),
			array('Tujuan_Pinjaman', 'length', 'max'=>200),
			array('Jumlah_Pinjaman, Besar_Denda, Service_Fee, Saldo_Pinjaman, Akumulasi_Kekurangan_Bunga', 'length', 'max'=>19),
			array('Suku_Bunga, Persen_Denda, Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Created_By, Last_Update_By', 'length', 'max'=>30),
			array('Tgl_Mutasi', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('No_Pinjaman, Tgl_Pinjam, No_Pengajuan, Kode_Cabang, No_BA, Tujuan_Pinjaman, Kategori, Jenis_Pinjaman, Jenis_Pembayaran, Jenis_Angsuran, Jumlah_Pinjaman, Suku_Bunga, Persen_Denda, Besar_Denda, Jangka_Waktu, No_Jaminan, Service_Fee, Saldo_Pinjaman, Status_Pinjaman, Tgl_Angsur_Terakhir, Tgl_Realisasi, Print_Line, Print_Line_Pinjaman, Akumulasi_Kekurangan_Bunga, Mutasi, Tgl_Mutasi, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'safe', 'on'=>'search'),
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
			'MAnggotaMPinjaman'=>array(self::BELONGS_TO, 'MAnggota', 'No_BA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'No_Pinjaman' => 'No Pinjaman',
			'Tgl_Pinjam' => 'Tgl Pinjam',
			'No_Pengajuan' => 'No Pengajuan',
			'Kode_Cabang' => 'Kode Cabang',
			'No_BA' => 'No Ba',
			'Tujuan_Pinjaman' => 'Tujuan Pinjaman',
			'Kategori' => 'Kategori',
			'Jenis_Pinjaman' => 'Jenis Pinjaman',
			'Jenis_Pembayaran' => 'Jenis Pembayaran',
			'Jenis_Angsuran' => 'Jenis Angsuran',
			'Jumlah_Pinjaman' => 'Jumlah Pinjaman',
			'Suku_Bunga' => 'Suku Bunga',
			'Persen_Denda' => 'Persen Denda',
			'Besar_Denda' => 'Besar Denda',
			'Jangka_Waktu' => 'Jangka Waktu',
			'No_Jaminan' => 'No Jaminan',
			'Service_Fee' => 'Service Fee',
			'Saldo_Pinjaman' => 'Saldo Pinjaman',
			'Status_Pinjaman' => 'Status Pinjaman',
			'Tgl_Angsur_Terakhir' => 'Tgl Angsur Terakhir',
			'Tgl_Realisasi' => 'Tgl Realisasi',
			'Print_Line' => 'Print Line',
			'Print_Line_Pinjaman' => 'Print Line Pinjaman',
			'Akumulasi_Kekurangan_Bunga' => 'Akumulasi Kekurangan Bunga',
			'Mutasi' => 'Mutasi',
			'Tgl_Mutasi' => 'Tgl Mutasi',
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

		$criteria->compare('No_Pinjaman',$this->No_Pinjaman,true);
		$criteria->compare('Tgl_Pinjam',$this->Tgl_Pinjam,true);
		$criteria->compare('No_Pengajuan',$this->No_Pengajuan,true);
		$criteria->compare('Kode_Cabang',$this->Kode_Cabang,true);
		$criteria->compare('No_BA',$this->No_BA,true);
		$criteria->compare('Tujuan_Pinjaman',$this->Tujuan_Pinjaman,true);
		$criteria->compare('Kategori',$this->Kategori);
		$criteria->compare('Jenis_Pinjaman',$this->Jenis_Pinjaman,true);
		$criteria->compare('Jenis_Pembayaran',$this->Jenis_Pembayaran);
		$criteria->compare('Jenis_Angsuran',$this->Jenis_Angsuran);
		$criteria->compare('Jumlah_Pinjaman',$this->Jumlah_Pinjaman,true);
		$criteria->compare('Suku_Bunga',$this->Suku_Bunga,true);
		$criteria->compare('Persen_Denda',$this->Persen_Denda,true);
		$criteria->compare('Besar_Denda',$this->Besar_Denda,true);
		$criteria->compare('Jangka_Waktu',$this->Jangka_Waktu);
		$criteria->compare('No_Jaminan',$this->No_Jaminan,true);
		$criteria->compare('Service_Fee',$this->Service_Fee,true);
		$criteria->compare('Saldo_Pinjaman',$this->Saldo_Pinjaman,true);
		$criteria->compare('Status_Pinjaman',$this->Status_Pinjaman);
		$criteria->compare('Tgl_Angsur_Terakhir',$this->Tgl_Angsur_Terakhir,true);
		$criteria->compare('Tgl_Realisasi',$this->Tgl_Realisasi,true);
		$criteria->compare('Print_Line',$this->Print_Line);
		$criteria->compare('Print_Line_Pinjaman',$this->Print_Line_Pinjaman);
		$criteria->compare('Akumulasi_Kekurangan_Bunga',$this->Akumulasi_Kekurangan_Bunga,true);
		$criteria->compare('Mutasi',$this->Mutasi);
		$criteria->compare('Tgl_Mutasi',$this->Tgl_Mutasi,true);
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