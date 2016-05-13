<?php

namespace ThinkReaXMLParser\Objects;

use SimpleXMLElement;

class LandListing extends Listing
{
    public function __construct(SimpleXMLElement $xml)
    {
        parent::__construct($xml);
        $this->setCategory((string) $xml->landCategory->attributes()->name);
    }
}