var http = require('http'), fs = require('fs');
 
var html = fs.readFileSync('./index.html'); 

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write(html);
    res.end();
}).listen(8080);
