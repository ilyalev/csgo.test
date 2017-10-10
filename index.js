var express = require('express');
var exphbs  = require('express-handlebars');
var mysql      = require('mysql');


var db_config = {
  host     : 'localhost',
  user     : 'levikovily',
  password : '1qaZXsw2',
  database : 'betsite'
};



var app = express();
 
app.use(express.static(__dirname + '/views'));
app.engine('handlebars', exphbs({defaultLayout: 'main'}));
app.set('view engine', 'handlebars');
 
app.get('/', function (req, res) {
	
	res.render('home');
	
});

 
app.get('/matches', function (req, res) {
	
	res.send("req.params");
	
});
app.listen(3000);