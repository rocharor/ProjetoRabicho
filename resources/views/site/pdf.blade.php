<?php
// ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Teste PDF</title>
        <meta http-equiv=Content-Type content=text/html charset=UTF-8>
        <meta name="Generator" content="Projeto BoletoPHP - www.boletophp.com.br - Licença GPL" />
    </head>

    <body text=#000000 bgColor=#ffffff topMargin=0 rightMargin=0>
        teste 123
    </body>
</html>

<?php
  // define('MPDF_PATH', '/var/www/html/boletophp/mpdf60/');
  // include(MPDF_PATH.'mpdf.php');
  // $mpdf=new mPDF();
  // $html = ob_get_clean();
  // $mpdf->WriteHTML(mb_convert_encoding($html, 'UTF-8', 'UTF-8'));
  // $mpdf->Output();
//  // $mpdf->WriteHTML(ob_get_clean());



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();

exit();
