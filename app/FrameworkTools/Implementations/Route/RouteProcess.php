<?php

namespace App\FrameworkTools\Implementations\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\CarController;
use App\Controllers\InsertDataController;
use App\Controllers\HelloWorldController;

class RouteProcess {

    use PostTrait;

    private static $processServerElements;

    public static function execute() {
        self::$processServerElements = ProcessServerElements::start();
        $routeArray = [];

        switch (self::$processServerElements->getVerb()) {    
            case 'GET':
                return self::get();
            case 'POST':
                return self::post();
        }
    }   
}