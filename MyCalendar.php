<?php 

class MyCalendar
{
   public function checkDayNameOfDate($nday,$nmonth){

    $input_date = $nday."/".$nmonth."/"."2023";
    $datetime = DateTime::createFromFormat('d/m/Y', '05/06/2021');
    return $datetime->format('l');
   }
}