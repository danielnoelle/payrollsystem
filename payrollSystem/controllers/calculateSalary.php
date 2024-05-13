<?php

function calculateGrossSalary($hourlyRate, $hoursWorked, $daysWorked, $bonus)
{

  if (!is_numeric($hourlyRate) || !is_numeric($hoursWorked) || !is_numeric($daysWorked) || !is_numeric($bonus)) {
    return "Error: Non-numeric value detected.";
  }

  $grossSalary = $hourlyRate * $hoursWorked * $daysWorked;
  if (!empty($bonus)) {
    $grossSalary += $bonus;
  }

  return $grossSalary;
}

function calculateNetSalary($grossSalary, $benefits, $tax)
{

  if (!is_numeric($grossSalary) || !is_numeric($benefits) || !is_numeric($tax)) {
    return "Error: Non-numeric value detected.";
  }

  $taxableIncome = $grossSalary - $benefits;
  $taxAmount = $taxableIncome * $tax;
  $netSalary = $taxableIncome - $taxAmount;

  return $netSalary;
}

function getTotalDeduction($grossSalary, $benefits, $tax)
{

  if (!is_numeric($grossSalary) || !is_numeric($benefits) || !is_numeric($tax)) {

    return "Error: Non-numeric value detected.";
  }

  $taxableIncome = $grossSalary - $benefits;
  $taxAmount = $taxableIncome * $tax;
  $totalDeduction = $taxAmount + $benefits;

  return $totalDeduction;
}
