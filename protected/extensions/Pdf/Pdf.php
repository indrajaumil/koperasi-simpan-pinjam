<?php
class Pdf {

    public function pdf_create($html, $filename, $paper, $orientation)
    {
        require_once("dompdf/dompdf_config.inc.php");
        spl_autoload_register('DOMPDF_autoload');

        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->set_paper($paper,$orientation);
        $dompdf->render();        
        $dompdf->stream($filename.".pdf");        
    }
}
?>