<?php
class MFormPengajuan extends CActiveRecord
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
		return 'm_form_pengajuan';
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('id_pengajuan, No_BA, tanggal_pengajuan, jumlah_pinjaman, jangka_waktu', 'required'),
			array('alasan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pengajuan, No_BA, tanggal_pengajuan, jumlah_pinjaman, jangka_waktu, alasan', 'safe', 'on'=>'search'),
		);
	}
	
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'MAnggotaMFormPengajuan'=>array(self::BELONGS_TO, 'MAnggota', 'No_BA'),
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pengajuan' => 'ID',
			'No_BA' => 'No Ba',
			'tanggal_pengajuan' => 'Tanggal Pengajuan',
			'jumlah_pinjaman' => 'Jumlah',
			'jangka_waktu' => 'Jangka Waktu (dalam bulan)',
			'alasan' => 'Alasan Pengajuan'
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

		$criteria->compare('id_pengajuan',$this->id_pengajuan,true);
		$criteria->compare('No_BA',$this->No_BA,true);
		$criteria->compare('tanggal_pengajuan',$this->tanggal_pengajuan,true);
		$criteria->compare('jumlah_pinjaman',$this->jumlah_pinjaman);
		$criteria->compare('jangka_waktu',$this->jangka_waktu,true);
		$criteria->compare('alasan',$this->alasan);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}