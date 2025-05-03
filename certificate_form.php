<!DOCTYPE html>
<html>
<head>
  <title>Get Your Certificate</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url('blood12.png');">
  <nav>
    <img src="logo.png" class="logo">
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


  <h2>Download Blood Donation Certificate</h2>
  <form action="certificate_display.php" method="get">
    <label for="name">Your Full Name:</label><br>
    <input type="text" name="name" id="name" required><br><br>

    <label for="date">Date of Donation:</label><br>
    <input type="date" name="date" id="date" required><br><br>

    <button type="submit">Download Certificate</button>
  </form>
</body>
</html>