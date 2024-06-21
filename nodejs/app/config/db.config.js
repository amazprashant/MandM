const mysql = require('mysql');

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'law_firm'
});

db.connect(err => {
    if (err) {
        console.error('Could not connect to the database:', err);
        process.exit();
    } else {
        console.log('Connected to the database.');
    }
});

module.exports = db;
