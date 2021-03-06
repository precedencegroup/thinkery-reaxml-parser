<?php

use ThinkReaXMLParser\Objects\InspectionTime;
use Carbon\Carbon;

class InspectionTimeTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }
    
    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }
    
    public function testCreateInspectionTime()
    {
        $test_date = "21-Dec-2010 11:00am to 1:00pm";
        $it = new InspectionTime($test_date);

        $from = $it->getFrom();
        /* @var Carbon $to */
        $to = $it->getTo();

        $this->assertInstanceOf(Carbon::class, $from);
        $this->assertInstanceOf(Carbon::class, $to);

        $this->assertSame('2010-12-21 11:00:00', $from->toDateTimeString());
        $this->assertSame('2010-12-21 13:00:00', $to->toDateTimeString());
    }
}
