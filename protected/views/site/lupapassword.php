<?php
foreach (Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
}
?>
<style>
.form-row{
    padding: 5px; width: 60%; float: left;
}
.form-row label, .form-row input[type=text]{width:150px; float:left;}
.form-row div{width:170px; float: left; margin: 5px;}
</style>
<form method="post">
    <div class="form-row">
        <label for="email">Masukkan email Anda</label>
        <input type="text" name="email" id="email" />
    </div>
    <div class="form-row">
        <label for="email">Masukkan Nomor BA</label>
        <input type="text" name="no_ba" id="no_ba" />
    </div>
    <div class="form-row">
        <label for="email">Masukkan Tanggal Lahir</label>
        <input type="text" name="tgl_lahir" id="tgl_lahir" />
        <div class="hint"><i>Format: dd/mm/yyyy</i></div>
    </div>
    <div class="form-row">
        <input type="submit" value="Submit" />
    </div>
    
</form>