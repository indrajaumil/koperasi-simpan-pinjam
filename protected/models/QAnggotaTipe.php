<?php

/**
 * This is the model class for table "q_anggota_tipe".
 *
 * The followings are the available columns in table 'q_anggota_tipe':
 * @property string $No_BA
 * @property string $Nama
 * @property string $AA_Saldo_SW
 * @property string $AA_Saldo_SW_Seharusnya
 * @property string $Besar_Simpanan_Wajib
 * @property string $AA_Saldo_SP
 * @property string $AA_Saldo_DS
 * @property string $AA_Saldo_SP_Seharusnya
 * @property string $AA_Saldo_DS_Seharusnya
 * @property string $Besar_Simpanan_Pokok
 * @property string $Besar_Dana_Sosial
 * @property string $Jenis_Keanggotaan
 * @property string $Besar_Pembagi_Saham
 * @property string $Tgl_Keluar
 * @property integer $Kategori_Anggota
 * @property string $AA_Saldo_SS
 * @property string $AA_Tgl_Transaksi_AA_Terakhir
 * @property string $Tgl_Masuk
 * @property integer $Status_Keanggotaan
 * @property string $Besar_Pembagi_Jasa_Pinjaman
 */
class QAnggotaTipe extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return QAnggotaTipe the static model class
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
		return 'q_anggota_tipe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nama, Besar_Simpanan_Wajib, Besar_Simpanan_Pokok, Jenis_Keanggotaan, Tgl_Masuk', 'required'),
			array('Kategori_Anggota, Status_Keanggotaan', 'numerical', 'integerOnly'=>true),
			array('No_BA', 'length', 'max'=>10),
			array('Nama', 'length', 'max'=>100),
			array('AA_Saldo_SW, AA_Saldo_SW_Seharusnya, Besar_Simpanan_Wajib, AA_Saldo_SP, AA_Saldo_DS, AA_Saldo_SP_Seharusnya, AA_Saldo_DS_Seharusnya, Besar_Simpanan_Pokok, Besar_Dana_Sosial, Besar_Pembagi_Saham, AA_Saldo_SS, Besar_Pembagi_Jasa_Pinjaman', 'length', 'max'=>19),
			array('Jenis_Keanggotaan', 'length', 'max'=>30),
			array('Tgl_Keluar, AA_Tgl_Transaksi_AA_Terakhir', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('No_BA, Nama, AA_Saldo_SW, AA_Saldo_SW_Seharusnya, Besar_Simpanan_Wajib, AA_Saldo_SP, AA_Saldo_DS, AA_Saldo_SP_Seharusnya, AA_Saldo_DS_Seharusnya, Besar_Simpanan_Pokok, Besar_Dana_Sosial, Jenis_Keanggotaan, Besar_Pembagi_Saham, Tgl_Keluar, Kategori_Anggota, AA_Saldo_SS, AA_Tgl_Transaksi_AA_Terakhir, Tgl_Masuk, Status_Keanggotaan, Besar_Pembagi_Jasa_Pinjaman', 'safe', 'on'=>'search'),
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
			'No_BA' => 'No Ba',
			'Nama' => 'Nama',
			'AA_Saldo_SW' => 'Aa Saldo Sw',
			'AA_Saldo_SW_Seharusnya' => 'Aa Saldo Sw Seharusnya',
			'Besar_Simpanan_Wajib' => 'Besar Simpanan Wajib',
			'AA_Saldo_SP' => 'Aa Saldo Sp',
			'AA_Saldo_DS' => 'Aa Saldo Ds',
			'AA_Saldo_SP_Seharusnya' => 'Aa Saldo Sp Seharusnya',
			'AA_Saldo_DS_Seharusnya' => 'Aa Saldo Ds Seharusnya',
			'Besar_Simpanan_Pokok' => 'Besar Simpanan Pokok',
			'Besar_Dana_Sosial' => 'Besar Dana Sosial',
			'Jenis_Keanggotaan' => 'Jenis Keanggotaan',
			'Besar_Pembagi_Saham' => 'Besar Pembagi Saham',
			'Tgl_Keluar' => 'Tgl Keluar',
			'Kategori_Anggota' => 'Kategori Anggota',
			'AA_Saldo_SS' => 'Aa Saldo Ss',
			'AA_Tgl_Transaksi_AA_Terakhir' => 'Aa Tgl Transaksi Aa Terakhir',
			'Tgl_Masuk' => 'Tgl Masuk',
			'Status_Keanggotaan' => 'Status Keanggotaan',
			'Besar_Pembagi_Jasa_Pinjaman' => 'Besar Pembagi Jasa Pinjaman',
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
		$criteria->compare('Nama',$this->Nama,true);
		$criteria->compare('AA_Saldo_SW',$this->AA_Saldo_SW,true);
		$criteria->compare('AA_Saldo_SW_Seharusnya',$this->AA_Saldo_SW_Seharusnya,true);
		$criteria->compare('Besar_Simpanan_Wajib',$this->Besar_Simpanan_Wajib,true);
		$criteria->compare('AA_Saldo_SP',$this->AA_Saldo_SP,true);
		$criteria->compare('AA_Saldo_DS',$this->AA_Saldo_DS,true);
		$criteria->compare('AA_Saldo_SP_Seharusnya',$this->AA_Saldo_SP_Seharusnya,true);
		$criteria->compare('AA_Saldo_DS_Seharusnya',$this->AA_Saldo_DS_Seharusnya,true);
		$criteria->compare('Besar_Simpanan_Pokok',$this->Besar_Simpanan_Pokok,true);
		$criteria->compare('Besar_Dana_Sosial',$this->Besar_Dana_Sosial,true);
		$criteria->compare('Jenis_Keanggotaan',$this->Jenis_Keanggotaan,true);
		$criteria->compare('Besar_Pembagi_Saham',$this->Besar_Pembagi_Saham,true);
		$criteria->compare('Tgl_Keluar',$this->Tgl_Keluar,true);
		$criteria->compare('Kategori_Anggota',$this->Kategori_Anggota);
		$criteria->compare('AA_Saldo_SS',$this->AA_Saldo_SS,true);
		$criteria->compare('AA_Tgl_Transaksi_AA_Terakhir',$this->AA_Tgl_Transaksi_AA_Terakhir,true);
		$criteria->compare('Tgl_Masuk',$this->Tgl_Masuk,true);
		$criteria->compare('Status_Keanggotaan',$this->Status_Keanggotaan);
		$criteria->compare('Besar_Pembagi_Jasa_Pinjaman',$this->Besar_Pembagi_Jasa_Pinjaman,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}