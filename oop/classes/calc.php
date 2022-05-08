<?php

class Calc {
    public $operater;
    public $number1;
    public $number2;

    public function __construct(string $operater, int $number1, int $number2) {
        $this->operater = $operater;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function calculator() {
        switch($this->operater) {
            case 'add':
                $result = $this->number1 + $this->number2;
                return $result;
                break;
            case 'sub':
                $result = $this->number1 - $this->number2;
                return $result;
                break;
            case 'div':
                $result = $this->number1 / $this->number2;
                return $result;
                break;
            case 'mul':
                $result = $this->number1 * $this->number2;
                return $result;
                break;
            default:
                echo "Error!";
                break;
        }
    }
}

?>