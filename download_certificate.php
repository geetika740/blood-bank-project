<?php
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "Donor";
$date = isset($_GET['date']) ? htmlspecialchars($_GET['date']) : date("Y-m-d");

$html = "
  <html>
  <head>
    <style>
      body { font-family: Georgia, serif; background: #fff5f5; text-align: center; padding: 40px; }
      .certificate { border: 10px solid #b30000; padding: 50px; }
      h1 { color: #b30000; font-size: 28px; }
      h2 { margin: 20px 0; }
      p { font-size: 16px; }
      .quote { font-style: italic; margin-top: 20px; color: #555; }
    </style>
  </head>
  <body>
    <div class='certificate'>
      <h1>Certificate of Appreciation</h1>
      <p>This certificate is proudly presented to</p>
      <h2>$name</h2>
      <p>for generously donating blood on</p>
      <p><strong>$date</strong></p>
      <p class='quote'>\"You don’t have to be a doctor to save lives – just donate blood.\"</p>
    </div>
  </body>
  </html>
";

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("blood_donation_certificate.pdf", array("Attachment" => 1));
?>