<?php

declare(strict_types=1);

namespace Mhdel\Csstec;

class Api{
    public function getRandomNumber(): int{
        return rand(0,100);
    }
}
