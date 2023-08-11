// var mysql = require("mysql");
// var express = require("express");
// var bodyParser = require("body-parser");
// var encoder = bodyParser.urlencoded();
// var app = express();
// app.use("/assets", express.static("assets"))
// var connection=mysql.createConnection({
//     host:'database-faculty-vit.cfk9lvrbeabj.ap-south-1.rds.amazonaws.com',
//     database:'sys',
//     user:'admin',
//     password:'password'
// });
// // connection.connect(function(err){
// //     if(err) throw err;
// //     console.log('Database connected');
// // });
// // module.exports = connect
// app.get("/", function(req,res){
//     res.sendFile(__dirname + "/index.html");

// })

// app.get("/login", function(req,res){
//     res.sendFile(__dirname + "/login.html");

// })

// app.post("/", function(req,res){
//     var username = req.body.username;
//     var password = req.body.password;
//     connection.query("select * from sys.users where emp_id = ? and password = ?",[username,password], function(error,results,fields){
//         if(results.length > 0){
//             res.redirect("/welcome");
//         }
//         else{
//             res.redirect("/");
//         }
//         res.end();
//     })

// })
// // app.post("/",encoder,function(req,res){
// //     var username = req.body.username;
// //     var password = req.body.password;
// //     connection.query("select * from sys.users where emp_id = ? and password = ?",[username,password], function(error,results,fields){
// //         if(results.length > 0){
// //             res.redirect("/welcome");
// //         }
// //         else{
// //             res.redirect("/");
// //         }
// //         res.end();
// //     })
// // })

// app.get("/welcome",function(req,res){
//     res.sendFile(__dirname + "/welcome.html")
// })

// app.listen(4500);