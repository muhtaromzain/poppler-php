<?php

namespace MuhtaromZain\PopplerPhp\PopplerOptions;

use MuhtaromZain\PopplerPhp\Constants as C;

/**
 * Trait InfoFlags
 * @package MuhtaromZain\PopplerPhp\PopplerOptions
 */
trait InfoFlags
{
    /**
     * @return mixed
     */
    public function setBox()
    {
        return $this->setFlag(C::_BOX);
    }

    /**
     * @return array
     */
    protected function infoFlags()
    {
        return [C::_BOX];
    }
}
