<?php

/**
 * Contains the PriceSummaryDtoTest class.
 *
 * @copyright   Copyright (c) 2018 Storm Storez Srl-d
 * @author      Hunor Kedves
 * @license     MIT
 * @since       2018-01-19
 *
 */

namespace Vanvo\NavInvoiceXml\Tests;

use PHPUnit\Framework\TestCase;
use Vanvo\NavInvoiceXml\Dto\PriceSummary;

class PriceSummaryDtoTest extends TestCase
{
    /** @var PriceSummary */
    private $priceSummary;

    protected function setUp()
    {
        $this->priceSummary = new PriceSummary(
            13,
            10.27,
            23.27
        );
    }

    /**
     * @test
     */
    public function it_can_be_created()
    {
        $this->assertInstanceOf(PriceSummary::class, $this->priceSummary);
    }

    /**
     * @test
     */
    public function it_has_all_necessary_fields()
    {
        $this->assertObjectHasAttribute('netTotal', $this->priceSummary);
        $this->assertObjectHasAttribute('taxTotal', $this->priceSummary);
        $this->assertObjectHasAttribute('grossTotal', $this->priceSummary);
    }

    /**
     * @test
     */
    public function it_returns_the_proper_types()
    {
        $this->assertInternalType('float', $this->priceSummary->getNetTotal());
        $this->assertInternalType('float', $this->priceSummary->getTaxTotal());
        $this->assertInternalType('float', $this->priceSummary->getGrossTotal());
    }
}
