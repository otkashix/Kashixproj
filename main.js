const express = require('express');
const helmet = require('helmet');
const path = require('path');
require('dotenv').config();

// Setting up server
const app = express();
app.use(helmet());

/*app.set('src/views') // Setting public files
app.use(express.static('css'));
app.use(express.static('js'));*/
//app.use(express.static(__dirname + 'src/views'));
app.use(express.static(path.join(__dirname, 'src/views')));
app.set('view engine', 'html') // Default package we are using for the files


app.get('/', function(req, res) {
    res.render('index');
    //res.send('Hello')
})

/*app.get('/', (req, res) => res.render('index.html', {
    
}));

app.get('/about', (req, res) => res.render('maintenance.pug', {
    subtitle: 'About Bot'
}));

app.get('/bugtracker', (req, res) => res.render('maintenance.pug', {
    subtitle: 'Bugtracker'
}));

app.get('/login', (req, res) => res.render('maintenance.pug', { 
    subtitle: 'Login'
}));*/

app.listen(process.env.PORT, () => {console.log(`Server listening to port ${process.env.PORT}`)});