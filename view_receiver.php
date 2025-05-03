<?php
$conn = new mysqli("localhost", "root", "", "ebloodbank");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$result = $conn->query("SELECT * FROM receiver");
?>
<!DOCTYPE html>
<html>
<head>
  <title>View Receivers</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
      vertical-align: middle;
    }

    td {
      max-width: 200px;
      word-wrap: break-word;
      word-break:breal-all;
    }

    .nowrap {
      white-space: nowrap;
    }


    /* Optional: make table scrollable on small screens */
    .table-container {
      overflow-x: auto;
    }
  </style>
</head>
<body style="background-image: url('bg.png');">
<header>
<img src="logo.png" alt="Logo" class="logo">
  <nav>
   <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="donor.html">Register Donor</a></li>
      <li><a href="receiver.html">Register Receiver</a></li>
      <li><a href="view_donors.php">View Donors</a></li>
      <li><a href="view_receiver.php">View Receivers</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="certificate_form.php">Download certificate</a></li>
    </ul>
  </nav>
</header>

<div class="container">
  <h1>Registered Receivers</h1>
   <div class="table-container" >
    <table class="data-table" border="2" cellpadding="10" cellspacing="3">
      <thead>
        <tr>
          <th class="nowrap">Name</th>
          <th>Age</th>
          <th>Blood Group</th>
          <th class="nowrap">Contact</th>
          <th>Medical Conditions</th>
          <th>Aadhar No</th>
          <th class="nowrap">Gmail</th>
          <th class="nowrap">Gender</th>
          <th>DOB</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td class='nowrap'>{$row['name']}</td>
                  <td class='nowrap'>{$row['age']}</td>
                  <td class='nowrap'>{$row['blood_group']}</td>
                  <td class='nowrap'>{$row['contact']}</td>
                  <td class='nowrap'>{$row['medical_conditions']}</td>
                  <td class='nowrap'>{$row['aadhar']}</td>
                  <td class='nowrap'>{$row['gmail']}</td>
                  <td class='nowrap'>{$row['gender']}</td>
                  <td class='nowrap'>{$row['dob']}</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>

</body>
</html>