<?php

function calculateGrossSalary($hourlyRate, $hoursWorked, $daysWorked, $bonus)
{
  $grossSalary = $hourlyRate * $hoursWorked * $daysWorked;
  if (!empty($bonus)) {
    $grossSalary += $bonus;
  }
  return $grossSalary;
}

function calculateNetSalary($grossSalary, $benefits, $tax)
{
  $taxableIncome = $grossSalary - $benefits;
  $taxAmount = $taxableIncome * $tax;
  $netSalary = $grossSalary - $benefits - $taxAmount;
  return $netSalary;
}
