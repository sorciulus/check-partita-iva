<?php

/*
 * This file is part of PartitaIva.
 *
 * (c) Corrado Ronci <sorciulus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace sorciulus\PartitaIva;

/**
* Partita Iva Class
*/
class PartitaIva
{
	/**
	 * partita iva
	 * 
	 * @var string
	 */
	private $partitaIva;

	/**
	 * @var boolean
	 */
	private $isValid = false;

    /**
    * Sets the value of partitaIva.
    *
    * @param mixed $partitaIva the partita iva
    *
    * @return self
    */
    public function setPartitaIva($partitaIva)
    {
        $this->setIsValid(false);
        $this->partitaIva = $partitaIva;
		$this->check();
		return $this;
    } 

    /**
    * Sets the value of isValid.
    *
    * @param bool $isValid the is valid
    *
    * @return self
    */
    private function setIsValid(bool $isValid)
    {
        $this->isValid = $isValid;
	
		return $this;
    } 

    /**
    * Gets the value of partitaIva.
    *
    * @return mixed
    */
    public function getPartitaIva()
    {
        return $this->partitaIva;
    } 

    /**
    * Gets the value of isValid.
    *
    * @return bool
    */
    public function isValid()
    {
        return $this->isValid;
    }

    /**
     * check partita iva format are correct
     * 
     * @return void 
     */
    private function check()
    {    	
    	$partitaIva = $this->getPartitaIva();
    	if ($partitaIva === "" || strlen($partitaIva) != 11 || (preg_match("/^[0-9]+\$/", $partitaIva) != 1)) {
    		$valid = false; 
    	} else {    		
    		$s = 0;
			for ($i = 0; $i <= 9; $i += 2) {
				$s += ord($partitaIva[$i]) - ord("0");
			}

			for ($i = 1; $i <= 9; $i += 2) {
				$c = 2 * ( ord($partitaIva[$i]) - ord("0") );
				if ($c > 9) {
					$c = $c - 9;
				}
				$s += $c;
			}

			if (((10 - $s%10)%10) !== (ord($partitaIva[10]) - ord("0"))) {
				$valid = false;
			}

			if (preg_match("/^0([0-9][1-9]|[1-9][0-9])|100|120|121|888|999/",substr($partitaIva,7,3))) {
				$valid = true;
			}

			if (!isset($valid)) {
				$valid = false;
			}
    	}
    	$this->setIsValid($valid); 
    }
}