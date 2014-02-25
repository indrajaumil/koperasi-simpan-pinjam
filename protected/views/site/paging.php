<?php
echo CHtml::beginForm('', 'get');

echo CHtml::submitButton('Cari Data');
echo CHtml::endForm();
$this->widget('zii.widgets.grid.CGridView',
            array(
                'dataProvider'=>$data,
                'ajaxUpdate'=>false,
                'columns'=>array(
                        array(
                            'name'=>'No_BA',
                            'value'=>'$data->No_BA',
                        ),
                        array(
                            'name'=>'Tgl_Masuk',
                            'value'=>'$data->Tgl_Masuk',
                        ),
                    )
                )
        );
?>
