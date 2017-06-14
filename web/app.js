var express = require('express');
var app = express();

app.get('/', function (req, res) {
    res.send('Little Finger is here!');
});

app.get('/webhook', function (req, res) {
    res.send('webhook');
});

app.listen(3000, function () {
    console.log('Little Finger is up!');
})