<?php

namespace BahriCanli\JetSms\Test;

use Mockery as M;
use PHPUnit_Framework_TestCase;
use BahriCanli\JetSms\ShortMessage;
use BahriCanli\JetSms\ShortMessageFactory;

class ShortMessageFactoryTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        M::close();

        parent::tearDown();
    }

    public function test_it_creates_new_short_messages()
    {
        $shortMessageFactory = new ShortMessageFactory();

        $shortMessage = $shortMessageFactory->create('receiver', 'message');

        $this->assertInstanceOf(ShortMessage::class, $shortMessage);
        $this->assertEquals('message', $shortMessage->body());
        $this->assertEquals('receiver', $shortMessage->receiversString());
    }
}
