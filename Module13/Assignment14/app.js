const express = require('express');
const path = require('path');
const app = express()
const port = 3000

// app.get('/', (req,res) => {
//     res.send('Hello World, from ExpressJS')
// })

// get the index file from current directory

app.get('/', function (req, res ){
    res.sendFile(path.join(__dirname, '/index.html'));
});
app.listen(port, () => {
    console.group(`Example app listening on port ${port}`)
})