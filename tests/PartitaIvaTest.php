<?php


/*
 * This file is part of PartitaIva.
 *
 * (c) Corrado Ronci <sorciulus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace sorciulus\PartitaIva\Tests;

use PHPUnit\Framework\TestCase;
use sorciulus\PartitaIva\PartitaIva;  

class PartitaIvaTest extends TestCase
{
	private $partitaIva;

	public function setUp()
	{
		$this->partitaIva = new PartitaIva(); 
	}

	public function testSetPartitaIvaAssertTrue()
    {
    	$this->partitaIva->setPartitaIva("07973780013");
    	$this->assertEquals("07973780013", $this->partitaIva->getPartitaIva());
    }

    public function testIsValidAssertTrue()
    {
    	$this->partitaIva->setPartitaIva("07973780013");
    	$this->assertEquals(true, $this->partitaIva->isValid());
    }

    public function testIsValidAssertFalse()
    {
    	$this->partitaIva->setPartitaIva("00000000000");
    	$this->assertEquals(false, $this->partitaIva->isValid());
    }

    public function testIsValidEmptyAssertFalse()
    {
    	$this->partitaIva->setPartitaIva("");
    	$this->assertEquals(false, $this->partitaIva->isValid());
    }

    public function testIsValidNullAssertFalse()
    {
    	$this->partitaIva->setPartitaIva(null);
    	$this->assertEquals(false, $this->partitaIva->isValid());
    }
}