<?php
namespace App\Calculate;
final class PPH21Calculator{
    private $calculators;
    public function __construct(CalculatorInterface ...$calculators){
        $this->calculators = $calculators;
    }
    public function calculate(float $pkp): float{
        foreach ($this->calculators as $calculator) {
            if ($pkp < $calculator->maxPkp() && $pkp >= $calculator->minPkp()) {
            return $calculator->calculate($pkp);
        }}
    }
}