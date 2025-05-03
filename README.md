Blood Bank Management System

Description:

The Blood Bank Management System is a web-based application that facilitates the registration of blood donors and recipients, ensuring the efficient management of blood donations. It connects people in need of blood with those willing to donate, streamlining the process and improving overall accessibility.

Features:

Donor Registration: Users can register as blood donors, entering personal details like name, contact information, and blood type.

Recipient Management: Manages requests from recipients based on blood type and urgency.

Certificate Generation: Generates a certificate of appreciation for donors after a successful donation.

Phone & Aadhaar Validation: Validates the phone number (10 digits) and Aadhaar number (12 digits) for data accuracy.

Responsive Interface: Easy-to-use and responsive design for better user experience.


Technologies Used:

Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL

Library: DOMPDF for generating PDF certificates.


Installation:

To run this project locally, follow these steps:

1. Clone this repository:

git clone https://github.com/your-username/blood-bank-project.git


2. Install XAMPP or WAMP (for local server) if you haven't already.


3. Place the project folder in the htdocs folder for XAMPP or www folder for WAMP.


4. Set up a database in phpMyAdmin with the following:

Database Name: blood_bank

Create tables: donors, recipients, etc.



5. Import the SQL file (if provided) to create the necessary tables in the database.


6. Modify db_connection.php file with your local database credentials:

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";


7. Run the project by opening index.php in your browser.






Usage:

Donors: Register with valid details, and after donation, a certificate will be generated for your contribution.

Recipients: Submit blood requests based on your type and location.





Contributing:

If you would like to contribute to this project, feel free to fork the repository, make changes, and create a pull request. Contributions are always welcome!


License:

This project is licensed under the MIT License - see the LICENSE file for details.


Contact:

For any queries or suggestions, feel free to reach out to me at [kakkargeetika200@gmail.com ].




Acknowledgments

DOMPDF for generating certificates in PDF format.

PHP and MySQL for backend and database management.
