<?php
namespace App\Calculate;
class ThirdRuleCalculator extends AbstractCalculator
{
public function maxPkp(): float
{ return 500000000;
}
public function minPkp(): float
{ return 250000000;
}
public function taxPercentage(): float
{ return 0.25;
}}