<?php
/**
 * Created by PhpStorm.
 * User: qiuwenxi
 * Date: 2016/5/16
 * Time: 17:05
 */

namespace com\zhubajie\php\easysdk;

class ApiModule
{
    static private $apiInstance = null;

    private function __construct(){}

    static public function provideApi()
    {
        if ( !self::$apiInstance ) {
            self::$apiInstance = new Api();
        }
        return self::$apiInstance;
    }
}