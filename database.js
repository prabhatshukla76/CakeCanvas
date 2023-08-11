var mysql = require("mysql");
var connection=mysql.createConnection({
    host:'database-faculty-vit.cfk9lvrbeabj.ap-south-1.rds.amazonaws.com',
    database:'sys',
    user:'admin',
    password:'password'
});
connection.connect(function(err){
    if(err) throw err;
    console.log('Database connected');
});
module.exports = connection;