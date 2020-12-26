<?php

namespace Akkuzin;

Class Equation
{
    public function li_solve($a, $b)
    {

        if ($a == 0) {
            throw new AkkuzinException("Ошибка: уравнения не существует.");
        }
        MyLog::log("Определено, что это линейное уравнение");
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>