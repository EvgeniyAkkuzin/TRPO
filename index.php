<?php

class A
{
    protected $x;

    public function dec(float $a, float $b)
    {
        return array(($a === 0 ? Null : $this->x = -$b / $a));

    }
}

class B extends A
{

    protected function disc($a, $b, $c)
    {
        return $b * $b - 4 * $a * $c;

    }

    public function dec($a, $b, $c)
    {
        if ($a === 0) {
            return dec($b, $c);
        }

        $d = $this->disc($a, $b, $c);

        if ($d > 0) {
            $d = sqrt($d);
            return $this->x = array((-$b - $d) / (2 * $a), (-$b + $d) / (2 * $a));

        }

        if ($d === 0) {
            return $this->x = array(-$b / (2 * $a));
        }

        return null;

    }
}

?>

