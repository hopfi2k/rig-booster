# RIG BOOSTER
RIG BOOSTER is a high performance **stratum+tcp** proxy between miners and pools with database and minimal web interface.

It will allow to bundle different miners (rig's) to connect to the proxy rather than individually connecting to the pool. The Proxy itself establishes only one connection to the pool, thus boosting performance by applying different optimizations while proxying connections.

Some of the features are:
* only one connection to the mining pool, saving internet bandwidth
* high performance proxy forwarding using the ```swoodle``` library
* automatic switching to most profitable coin with data from https://whattomine.com (same algo only)
* prevent miner(s) to connect to other address preventing stealing of shares


Simple installation instructions:
```
$ sudo apt install php-dev
$ sudo pecl install swoole
$ git clone https://github/hopfi2k/php-mining-proxy
$ composer install
$ php ./rig-boost/boost.php
```

Point your browser to ```http://<ip-machine>:8888``` to access the web-interface and follow the instructions to setup your miners.
