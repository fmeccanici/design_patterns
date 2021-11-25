<?php

// Encapsulate and make them interchangeable

interface Logger {
    public function log($data);
}

// Define a family of algorithms

class LogToFile implements Logger {

    public function log($data)
    {
        var_dump('Log data to file');
    }
}

class LogToDatabase implements Logger{

    public function log($data)
    {
        var_dump('Log data to database');
    }
}

class LogToXWebService implements Logger{

    public function log($data)
    {
        var_dump('Log data to Saas site');
    }
}

class App {
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ? : new LogToFile();
        $logger->log($data);
    }
}

$app = new App;
$app->log('Some information here.', new LogToXWebService());