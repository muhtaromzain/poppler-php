<?php
/**
 * Poppler-PHP
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/12/2016
 * Time:    5:50 PM
 **/

namespace MuhtaromZain\PopplerPhp\PopplerOptions;

use MuhtaromZain\PopplerPhp\Constants as C;

/**
 * Trait VersionFlags
 * @package MuhtaromZain\PopplerPhp\PopplerOptions
 */
trait VersionFlags
{
    /**
     * @return mixed
     */
    public function printVersionInfo()
    {
        return $this->setFlag(C::_V);
    }

    /**
     * @return array
     */
    protected function versionFlags()
    {
        return [C::_V];
    }
}
