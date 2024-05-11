<?php

function calculateNetSalary($hoursWorked, $daysWorked, $hourlyRate, $taxDeduction, $benefitsDeduction, $otherDeduction) {

  $grossSalary = $hoursWorked * $daysWorked * $hourlyRate;


  $totalDeductions = $taxDeduction + $benefitsDeduction + $otherDeduction;


  $netSalary = $grossSalary - $totalDeductions;

  return $netSalary;
}

?>