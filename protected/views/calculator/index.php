<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<?php $cs=Yii::app()->getClientScript(); ?>
<?php $cssCoreUrl = $cs->getCoreScriptUrl(); ?>
<?php $cs->registerCssFile($cssCoreUrl . '/jui/css/base/jquery-ui.css'); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lib/jquery.formatCurrency.js"></script>
<style>
	.form{border:1px solid #999; background:#BBB; width:80%; margin:auto; font-family:Tahoma, Geneva, sans-serif;}
	.row{text-align:left; padding:4px;}
	.row label{font-size:12px; font-weight:bold; color:#000; width:150px; float:left;}
	.info{font-size:10px; color:#FFF; font-style:italic; display:inline;}
	.result{display:none; border:1px solid #999; background:#DDD; width:80%; margin:4px auto; text-align:center;}
	.error{width:50%; margin:4px auto; border:#F00 1px solid; background:#F96; font-family:Tahoma, Geneva, sans-serif; font-size:11px; padding:6px 0px; display:none;}
	.loading{border:1px solid #00C; background:#09F; width:60%; margin:4px auto; display:none;}
	.result table{font-family:Tahoma, Geneva, sans-serif; font-size:12px; border:#000 1px solid; margin:2px auto;}
	.header td, .footer td{font-weight:bold; text-align:center; padding:6px; background:#000; color:#FFF; white-space:nowrap}
	.rowdata td{padding:6px; white-space:nowrap}
	.even{background:#FFF;}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('#bunga').blur(function() {
			$(this).toNumber({ region:'id-ID' });
		})
		.keyup(function(e) {
				var e = window.event || e;
				var keyUnicode = e.charCode || e.keyCode;
				if (e !== undefined) {
					switch (keyUnicode) {
						case 16: break; // Shift
						case 27: this.value = ''; break; // Esc: clear entry
						case 35: break; // End
						case 36: break; // Home
						case 37: break; // cursor left
						case 38: break; // cursor up
						case 39: break; // cursor right
						case 40: break; // cursor down
						case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
						case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
						case 190: break; // .
						default: $(this).toNumber({ region:'id-ID' });
					}
				}
			});
		$('#jangka_waktu').blur(function() {
			$(this).toNumber({ region:'id-ID' });
		})
		.keyup(function(e) {
				var e = window.event || e;
				var keyUnicode = e.charCode || e.keyCode;
				if (e !== undefined) {
					switch (keyUnicode) {
						case 16: break; // Shift
						case 27: this.value = ''; break; // Esc: clear entry
						case 35: break; // End
						case 36: break; // Home
						case 37: break; // cursor left
						case 38: break; // cursor up
						case 39: break; // cursor right
						case 40: break; // cursor down
						case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
						case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
						case 190: break; // .
						default: $(this).toNumber({ region:'id-ID' });
					}
				}
			});
		$('#jumlah_pinjaman').blur(function() {
			$(this).formatCurrency({ region:'id-ID', colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 0, symbol: 'Rp. ' });
		})
		.keyup(function(e) {
				var e = window.event || e;
				var keyUnicode = e.charCode || e.keyCode;
				if (e !== undefined) {
					switch (keyUnicode) {
						case 16: break; // Shift
						case 27: this.value = ''; break; // Esc: clear entry
						case 35: break; // End
						case 36: break; // Home
						case 37: break; // cursor left
						case 38: break; // cursor up
						case 39: break; // cursor right
						case 40: break; // cursor down
						case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
						case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
						case 190: break; // .
						default: $(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 0, eventOnDecimalsEntered: true, region:'id-ID', symbol: 'Rp. ' });
					}
				}
			})
			//.bind('decimalsEntered', function(e, cents) {});
		$("#submit").click(function(){
			$(".result").hide();
			$(".loading").show();
			var error=false;
			if(!error)
			{
				var total=$("#jumlah_pinjaman").val();
				var interest=$("#bunga").val();
				var months=$("#jangka_waktu").val();
				var jenis_bunga=$("#jenis_bunga").val();
				$.ajax({
					url:'index.php?r=calculator/hitung',
					type:'post',
					data:{total: total, interest: interest, months: months, jenis_bunga:jenis_bunga},
					success: function(response){
						$(".loading").hide();
						$(".result").html(response);
						$(".result").show();
						
					}
				})	
			}
		})
	})
</script>
<div style="width:80%; text-align:center; margin:auto;">
	<div class="form">
    	<div class="row">
        	<label for="jumlah_pinjaman">Jumlah Pinjaman</label>
            <input type="text" id="jumlah_pinjaman" name="jumlah_pinjaman" />
            <span class="info">(dalam rupiah)</span>
        </div>
        <div class="row">
        	<label for="bunga">Jasa Per Tahun</label>
            <input type="text" id="bunga" name="bunga" />
            <span class="info">(dalam persen)</span>
        </div>
        <div class="row">
        	<label for="jangka_waktu">Jangka Waktu</label>
            <input type="text" id="jangka_waktu" name="jangka_waktu" />
            <span class="info">(dalam bulan)</span>
        </div>
        <div class="row">
        	<label for="jenis_bunga">Perhitungan Jasa</label>
            <select name="jenis_bunga" id="jenis_bunga">
            	<option value="1">Anuitas</option>
                <option value="2">Flat</option>
            </select>
        </div>
        <div class="row">
        	<span class="info">**Kalkulator ini menggunakan metode pembulatan seratus rupiah.</span>
        </div>
        <div class="row" style="text-align:center;">
        	<input type="button" id="submit" name="submit" value="Hitung">
        </div>
    </div>
    <div class="result"></div>
    <div class="error">&nbsp;</div>
    <div class="loading">
    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loader.gif">
        <span style="display:block; font-family:Tahoma, Geneva, sans-serif; font-size:10px;">Melakukan perhitungan, harap tunggu ...</span>
    </div>
</div>