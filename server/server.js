'use strict';

const express = require('express');
const http = require('http');
const socket = require('socket.io');

class Server {

    constructor() {

        this.port = 5000;
        this.host = 'localhost';
        this.app = express();
        this.http = http.Server(this.app);
        // this.socket = socket(this.http);

    }

    runServer() {
        this.http.listen(this.port, this.host, () => {
            console.log(` the server is running at http://${this.port}:${this.host}`);
        });
    }
}

const app = new Server();
app.runServer();