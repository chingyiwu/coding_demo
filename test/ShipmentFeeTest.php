<?php
use MyLib\ShipmentFee;
use PHPUnit\Framework\TestCase;

class ShipmentFeeTest extends TestCase {
    public function testShipmentFee()
    {
        $rules = 'rule1';
        $pounds = 2;
        $fee = 20;
        $shipmentFee = new ShipmentFee($rules, $pounds);
        $this->assertEquals($shipmentFee->calculate_shipment_fee(), $fee);
    }
}
?>