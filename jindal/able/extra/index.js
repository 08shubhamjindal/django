const express = require('express')
const path = require('path')

var app = express()

app.use(express.static(path.resolve(__dirname)))

app.get('/', function(res, req){
	res.sendFile('index.html')
})

app.listen(3000, function()
{
	console.log('listening')
})