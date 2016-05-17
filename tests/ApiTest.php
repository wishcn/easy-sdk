<?php
/**
 * Created by PhpStorm.
 * User: qiuwenxi
 * Date: 2016/5/16
 * Time: 17:05
 */

class ApiTest extends PHPUnit_Framework_TestCase
{
    public function testGetApi()
    {
        $this->assertInstanceOf(
            "\\com\\zhubajie\\php\\easysdk\\Api",
            \com\zhubajie\php\easysdk\ApiModule::provideApi()
        );
    }
}