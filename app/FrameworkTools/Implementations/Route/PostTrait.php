<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\InsertDataController;

trait PostTrait {
    
    private static function post() {
        switch (self::$processServerElements->getRoute()) {
            case '/carinsert':
                return (new InsertDataController)->exec();
            break;
        }
    }

}