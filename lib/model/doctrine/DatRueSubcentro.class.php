<?php

/**
 * DatRueSubcentro
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class DatRueSubcentro extends BaseDatRueSubcentro
{
	public function __toString() {
        return $this->getCodUeId().' - '.$this->getSubCea().' - '.$this->getSubcentro();
    }
}