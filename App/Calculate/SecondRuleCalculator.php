<?php
namespace App\Calculate;
class SecondRuleCalculator extends AbstractCalculator
{
public function maxPkp(): float
{ return 250000000;
}
public function minPkp(): float
{ return 50000000;
}
public function taxPercentage(): float
{ return 0.15;
}}