#Theater Remote

This is a custom app to control the devices in my home theater.


# Live server
Dependencies:
- VS Plugin - PHP Server
- VS Plugin - Live Server
- Chrom Extension - Live Server Web Extension
    (Chrome Extension proxy box should be uncheck)

Run:
1. Start MAMP - port 8888
2. Start VS Code
3. Start Live Server (Click Go Live - bottom right in VS)
4. Start PHP Server (Right Click on .php file -> Serve Project))
5. Go to http://127.0.0.1:5500/ (localhost wont update)

# Start SCSS
- npm run watch:sass

Working Config:
{
    "phpserver.phpConfigPath": "/Applications/MAMP/bin/php/php8.2.0/conf/php.ini",
    "phpserver.phpPath": "/Applications/MAMP/bin/php/php8.2.0/bin/php",
    "php.executablePath": "/Applications/MAMP/bin/php/php8.2.0/bin/php",
    "php.validate.executablePath": "/Applications/MAMP/bin/php/php8.2.0/bin/php",
    "liveServer.settings.NoBrowser": true,
    "phpserver.port": 8888,
    "liveServer.settings.donotShowInfoMsg": true,
    "liveServer.settings.proxy": {
        "enable": true,
        "baseUri": "/", 
        "proxyUri": "http://localhost:8888/theater-remote/"
    },
}