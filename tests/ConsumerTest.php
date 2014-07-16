<?php

namespace Tests;

use ApiConsumer\Consumer;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    
    public function testSetAndGetUrl()
    {
        $consumer = new Consumer();

        $consumer->setUrl('http://uws.net');

        $result = $consumer->getUrl();

        $this->assertEquals('http://uws.net', $result);
    }

    public function testSetAndGetCallType()
    {
        $consumer = new Consumer();

        $consumer->setCallType('post');

        $result = $consumer->getCallType();

        $this->assertEquals('post', $result);
    }

    public function testSetAndGetResponseType()
    {
        $consumer = new Consumer();

        $consumer->setResponseType('xml');

        $result = $consumer->getResponseType();

        $this->assertEquals('xml', $result);
    }
    
    public function testSetAndGetParams()
    {
        $consumer = new Consumer();
        
        $testParams = array('k' => 'ultra+marathon','v' => 'json','l' => 'Florida');
        
        $consumer->setParams($testParams);
        
        $result = $consumer->getParams();
        
        foreach ($testParams as $key => $value) {
            $this->assertArrayHasKey($key, $result);
            $this->assertEquals($value, $result[$key]);
        }
    }

    public function testSetAndGetOptions()
    {
        $consumer = new Consumer();

        $testOptions = array('k' => 'ultra+marathon','v' => 'json','l' => 'Florida');

        $consumer->setOptions($testOptions);

        $result = $consumer->getOptions();

        foreach ($testOptions as $key => $value) {
            $this->assertArrayHasKey($key, $result);
            $this->assertEquals($value, $result[$key]);
        }
    }
}
