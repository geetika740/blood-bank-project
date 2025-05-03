<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "Donor";
$date = isset($_GET['date']) ? htmlspecialchars($_GET['date']) : date("Y-m-d");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Blood Donation Certificate</title>
  <style>
    .certificate {
      width: 700px;
      margin: 50px auto;
      padding: 40px;
      border: 10px solid #c00;
      background: #fff5f5;
      text-align: center;
      font-family: 'Georgia', serif;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .certificate h1 {
      font-size: 28px;
      color: #b30000;
    }

    .certificate p {
      font-size: 18px;
      margin: 20px 0;
    }

    .download-btn {
      margin-top: 30px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #b30000;
      color: white;
      border: none;
      cursor: pointer;
    }

    .quote {
      font-style: italic;
      color: #555;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="certificate" id="cert">
    <h1>Certificate of Appreciation</h1>
    <p>This certificate is proudly presented to</p>
    <h2><?php echo $name; ?></h2>
    <p>for generously donating blood on</p>
    <p><strong><?php echo $date; ?></strong></p>
    <p class="quote">"You don’t have to be a doctor to save lives – just donate blood."</p>
    <button class="download-btn" onclick="window.print()">Download Certificate</button>
  </div>
</body>
</html>