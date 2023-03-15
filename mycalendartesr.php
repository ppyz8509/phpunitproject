<?php declare(strict_types=1);
include "MyCalendar.php";
use PHPUnit\Framework\TestCase;

class MyCalendarTest extends TestCase {
    public function testCheckDayNameOfDate(){
        $c1 = new MyCalendar();
        $this->asserEquals("Wednesday",$c1->checkDayNameOfDate("16","03"));
    }
}
