<?php

/**
 * This is the model class for table "m_jenispinjaman".
 *
 * The followings are the available columns in table 'm_jenispinjaman':
 * @property string $Kode_Jenis
 * @property string $Nama_Pinjaman
 * @property string $Deskripsi
 * @property integer $Kelompok_Pinjaman
 * @property integer $Status_Jenis_Pinjaman
 * @property integer $Status_Denda_Angs_Tetap
 * @property integer $Status_Denda_Angs_Tidak_Tetap
 * @property integer $Status_Denda_Lewat_Perjanjian
 * @property string $Suku_Bunga_Flat
 * @property string $Suku_Bunga_Anuitas
 * @property string $Suku_Bunga_Efektif
 * @property string $Suku_Bunga_Tidak_Tetap
 * @property string $Maksimum_Pinjaman
 * @property integer $Maksimum_Lama_Angsuran
 * @property string $Persen_Denda_Dari_Angsuran
 * @property string $Persen_Denda_Dari_Angsuran_TidakTetap
 * @property string $Persen_Denda_Lewat_Perjanjian
 * @property string $Persen_Fee
 * @property string $Service_Fee_Minimum
 * @property string $Biaya_Ganti_Buku
 * @property string $NP_Kas_Pinjaman
 * @property string $NP_Angsuran
 * @property string $NP_Jasa
 * @property string $NP_Denda
 * @property string $NP_Denda_Lewat_Perjanjian
 * @property string $NP_Service_Fee
 * @property string $NP_Ganti_Buku
 * @property string $NP_Non_Tunai
 * @property string $Created_By
 * @property string $Created_DateTime
 * @property string $Created_Location
 * @property string $Last_Update_By
 * @property string $Last_Update_DateTime
 * @property string $Last_Update_Location
 */
class MJenispinjaman extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MJenispinjaman the static model class
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
		return 'm_jenispinjaman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Kode_Jenis, Nama_Pinjaman, Deskripsi, Suku_Bunga_Flat, Suku_Bunga_Anuitas, Suku_Bunga_Efektif, Suku_Bunga_Tidak_Tetap, Maksimum_Pinjaman, Maksimum_Lama_Angsuran, Persen_Denda_Dari_Angsuran, Persen_Denda_Dari_Angsuran_TidakTetap, Persen_Fee, NP_Kas_Pinjaman, NP_Denda_Lewat_Perjanjian, NP_Non_Tunai, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'required'),
			array('Kelompok_Pinjaman, Status_Jenis_Pinjaman, Status_Denda_Angs_Tetap, Status_Denda_Angs_Tidak_Tetap, Status_Denda_Lewat_Perjanjian, Maksimum_Lama_Angsuran', 'numerical', 'integerOnly'=>true),
			array('Kode_Jenis', 'length', 'max'=>2),
			array('Nama_Pinjaman, Created_By, Last_Update_By', 'length', 'max'=>30),
			array('Deskripsi', 'length', 'max'=>255),
			array('Suku_Bunga_Flat, Suku_Bunga_Anuitas, Suku_Bunga_Efektif, Suku_Bunga_Tidak_Tetap, Persen_Denda_Dari_Angsuran, Persen_Denda_Dari_Angsuran_TidakTetap, Persen_Denda_Lewat_Perjanjian, Persen_Fee, Created_Location, Last_Update_Location', 'length', 'max'=>5),
			array('Maksimum_Pinjaman, Service_Fee_Minimum, Biaya_Ganti_Buku', 'length', 'max'=>19),
			array('NP_Kas_Pinjaman, NP_Angsuran, NP_Jasa, NP_Denda, NP_Denda_Lewat_Perjanjian, NP_Service_Fee, NP_Ganti_Buku, NP_Non_Tunai', 'length', 'max'=>14),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Kode_Jenis, Nama_Pinjaman, Deskripsi, Kelompok_Pinjaman, Status_Jenis_Pinjaman, Status_Denda_Angs_Tetap, Status_Denda_Angs_Tidak_Tetap, Status_Denda_Lewat_Perjanjian, Suku_Bunga_Flat, Suku_Bunga_Anuitas, Suku_Bunga_Efektif, Suku_Bunga_Tidak_Tetap, Maksimum_Pinjaman, Maksimum_Lama_Angsuran, Persen_Denda_Dari_Angsuran, Persen_Denda_Dari_Angsuran_TidakTetap, Persen_Denda_Lewat_Perjanjian, Persen_Fee, Service_Fee_Minimum, Biaya_Ganti_Buku, NP_Kas_Pinjaman, NP_Angsuran, NP_Jasa, NP_Denda, NP_Denda_Lewat_Perjanjian, NP_Service_Fee, NP_Ganti_Buku, NP_Non_Tunai, Created_By, Created_DateTime, Created_Location, Last_Update_By, Last_Update_DateTime, Last_Update_Location', 'safe', 'on'=>'search'),
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
			'Nama_Pinjaman' => 'Nama Pinjaman',
			'Deskripsi' => 'Deskripsi',
			'Kelompok_Pinjaman' => 'Kelompok Pinjaman',
			'Status_Jenis_Pinjaman' => 'Status Jenis Pinjaman',
			'Status_Denda_Angs_Tetap' => 'Status Denda Angs Tetap',
			'Status_Denda_Angs_Tidak_Tetap' => 'Status Denda Angs Tidak Tetap',
			'Status_Denda_Lewat_Perjanjian' => 'Status Denda Lewat Perjanjian',
			'Suku_Bunga_Flat' => 'Suku Bunga Flat',
			'Suku_Bunga_Anuitas' => 'Suku Bunga Anuitas',
			'Suku_Bunga_Efektif' => 'Suku Bunga Efektif',
			'Suku_Bunga_Tidak_Tetap' => 'Suku Bunga Tidak Tetap',
			'Maksimum_Pinjaman' => 'Maksimum Pinjaman',
			'Maksimum_Lama_Angsuran' => 'Maksimum Lama Angsuran',
			'Persen_Denda_Dari_Angsuran' => 'Persen Denda Dari Angsuran',
			'Persen_Denda_Dari_Angsuran_TidakTetap' => 'Persen Denda Dari Angsuran Tidak Tetap',
			'Persen_Denda_Lewat_Perjanjian' => 'Persen Denda Lewat Perjanjian',
			'Persen_Fee' => 'Persen Fee',
			'Service_Fee_Minimum' => 'Service Fee Minimum',
			'Biaya_Ganti_Buku' => 'Biaya Ganti Buku',
			'NP_Kas_Pinjaman' => 'Np Kas Pinjaman',
			'NP_Angsuran' => 'Np Angsuran',
			'NP_Jasa' => 'Np Jasa',
			'NP_Denda' => 'Np Denda',
			'NP_Denda_Lewat_Perjanjian' => 'Np Denda Lewat Perjanjian',
			'NP_Service_Fee' => 'Np Service Fee',
			'NP_Ganti_Buku' => 'Np Ganti Buku',
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
		$criteria->compare('Nama_Pinjaman',$this->Nama_Pinjaman,true);
		$criteria->compare('Deskripsi',$this->Deskripsi,true);
		$criteria->compare('Kelompok_Pinjaman',$this->Kelompok_Pinjaman);
		$criteria->compare('Status_Jenis_Pinjaman',$this->Status_Jenis_Pinjaman);
		$criteria->compare('Status_Denda_Angs_Tetap',$this->Status_Denda_Angs_Tetap);
		$criteria->compare('Status_Denda_Angs_Tidak_Tetap',$this->Status_Denda_Angs_Tidak_Tetap);
		$criteria->compare('Status_Denda_Lewat_Perjanjian',$this->Status_Denda_Lewat_Perjanjian);
		$criteria->compare('Suku_Bunga_Flat',$this->Suku_Bunga_Flat,true);
		$criteria->compare('Suku_Bunga_Anuitas',$this->Suku_Bunga_Anuitas,true);
		$criteria->compare('Suku_Bunga_Efektif',$this->Suku_Bunga_Efektif,true);
		$criteria->compare('Suku_Bunga_Tidak_Tetap',$this->Suku_Bunga_Tidak_Tetap,true);
		$criteria->compare('Maksimum_Pinjaman',$this->Maksimum_Pinjaman,true);
		$criteria->compare('Maksimum_Lama_Angsuran',$this->Maksimum_Lama_Angsuran);
		$criteria->compare('Persen_Denda_Dari_Angsuran',$this->Persen_Denda_Dari_Angsuran,true);
		$criteria->compare('Persen_Denda_Dari_Angsuran_TidakTetap',$this->Persen_Denda_Dari_Angsuran_TidakTetap,true);
		$criteria->compare('Persen_Denda_Lewat_Perjanjian',$this->Persen_Denda_Lewat_Perjanjian,true);
		$criteria->compare('Persen_Fee',$this->Persen_Fee,true);
		$criteria->compare('Service_Fee_Minimum',$this->Service_Fee_Minimum,true);
		$criteria->compare('Biaya_Ganti_Buku',$this->Biaya_Ganti_Buku,true);
		$criteria->compare('NP_Kas_Pinjaman',$this->NP_Kas_Pinjaman,true);
		$criteria->compare('NP_Angsuran',$this->NP_Angsuran,true);
		$criteria->compare('NP_Jasa',$this->NP_Jasa,true);
		$criteria->compare('NP_Denda',$this->NP_Denda,true);
		$criteria->compare('NP_Denda_Lewat_Perjanjian',$this->NP_Denda_Lewat_Perjanjian,true);
		$criteria->compare('NP_Service_Fee',$this->NP_Service_Fee,true);
		$criteria->compare('NP_Ganti_Buku',$this->NP_Ganti_Buku,true);
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