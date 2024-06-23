const mysql = require('mysql');

class Database {
  constructor(config) {
    this.connection = mysql.createConnection(config);
  }

  connect() {
    this.connection.connect(err => {
      if (err) {
        console.error('Error connecting to the database:', err);
      } else {
        console.log('Connected to the database');
      }
    });
  }

  query(sql, args) {
    return new Promise((resolve, reject) => {
      this.connection.query(sql, args, (err, results) => {
        if (err) {
          return reject(err);
        }
        resolve(results);
      });
    });
  }

  close() {
    return new Promise((resolve, reject) => {
      this.connection.end(err => {
        if (err) {
          return reject(err);
        }
        resolve();
      });
    });
  }
}

module.exports = Database;
