var http = require('http'), fs = require('fs');

http.createServer(function(req,res){
 fs.readFile('./index.html',function(err,html){
    var html_string = html.toString(); //Convertimos 'index.html' que está almacenado en html en binario a una cadena.

    var nombre = "Fernando";

    res.writeHead(200,{"Content-Type":"text/html"});
    res.write(html);
    res.end();
 });   
}).listen(8080);