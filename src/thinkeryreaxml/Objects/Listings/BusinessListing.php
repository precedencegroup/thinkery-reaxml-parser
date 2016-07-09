<?php

namespace ThinkReaXMLParser\Objects\Listings;

use SimpleXMLElement;

class BusinessListing extends Listing
{
    public function __construct(SimpleXMLElement $xml)
    {
        parent::__construct($xml);

        if ($this->getStatus() != 'sold' and $this->getStatus() != 'withdrawn') {
            $this->setCategory((string)$xml->businessCategory->name);
            $this->setAvailable((string)$xml->currentLeaseEndDate);
            $this->setSaleType((string)$xml->commercialListingType->attributes()->value);
            $this->setIncome((int)$xml->takings);
        }
    }
}