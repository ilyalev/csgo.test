var express = require('express');
var exphbs  = require('express-handlebars');
var mysql      = require('mysql');


var db_config = {
  host     : 'localhost',
  user     : 'levikovily',
  password : '1qaZXsw2',
  database : 'betsite'
};

var connectionж






var app = express();
 
app.use(express.static(__dirname + '/views'));
app.engine('handlebars', exphbs({defaultLayout: 'main'}));
app.set('view engine', 'handlebars');
 
app.get('/', function (req, res) {
	connection = mysql.createConnection(db_config); 
	
	connection.query('SELECT * FROM matches ORDER BY dateTime DESC', function(err, result, field){
	if (err) throw err;	
		res.render('home',{matches: result});
	});
});

app.listen(3000);