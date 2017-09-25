var express = require('express');
var exphbs  = require('express-handlebars');
var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'levikovily',
  password : '1qaZXsw2',
  database : 'betsite'
});
var app = express();
 
app.use(express.static(__dirname + '/views'));
app.engine('handlebars', exphbs({defaultLayout: 'main'}));
app.set('view engine', 'handlebars');
 
app.get('/', function (req, res) {
	connection.query('SELECT * FROM matches', function(err, result, field){
	if (err) throw err;
	res.render('home',{matches: result} );
	});
  connection.end;
});

app.listen(3000);