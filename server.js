const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const port = 3000;

app.use(cors());
app.use(bodyParser.json());
app.use(express.static('public'));

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root', // your MySQL username
  password: '', // your MySQL password
  database: 'ebloodbank'
});

db.connect(err => {
  if (err) {
    console.error('Database connection failed: ' + err.stack);
    return;
  }
  console.log('Connected to database.');
});

// Routes

app.post('/add-donor', (req, res) => {
  const donor = req.body;
  const query = 'INSERT INTO donors (name, age, blood_group, medical_conditions, contact) VALUES (?, ?, ?, ?, ?)';
  db.query(query, [donor.name, donor.age, donor.blood_group, donor.medical_conditions, donor.contact], (err, result) => {
    if (err) throw err;
    res.send('Donor added successfully');
  });
});

app.post('/add-receiver', (req, res) => {
  const receiver = req.body;
  const query = 'INSERT INTO receivers (name, age, blood_group, medical_conditions, contact) VALUES (?, ?, ?, ?, ?)';
  db.query(query, [receiver.name, receiver.age, receiver.blood_group, receiver.medical_conditions, receiver.contact], (err, result) => {
    if (err) throw err;
    res.send('Receiver added successfully');
  });
});

app.get('/donors', (req, res) => {
  db.query('SELECT * FROM donors', (err, results) => {
    if (err) throw err;
    res.json(results);
  });
});

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
