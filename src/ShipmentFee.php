<?php
namespace MyLib;

class ShipmentFee {
    public function main()
    {
        echo calculate_shipment_fee('rule1', 2);
        echo calculate_shipment_fee('rule1', 2.4);
        echo calculate_shipment_fee('rule2', 3);
        echo calculate_shipment_fee('rule3', 4);
    }
    public function calculate_shipment_fee($rules, $pounds)
    {
        try {
            if (!preg_match("/rule[0-3]/",$rules, $arrTest) || (gettype($pounds) !== 'integer' && gettype($pounds) !== 'double'))
            {			
                throw new Exception('Please check your input.');
            }
    
            switch ($rules)
            {
                case 'rule1': 
                    $shipment_weight = 1;
                    $shipping_fee = 10;
                    $extra_fee = 10;
                break;
                
                case 'rule2':
                    $shipment_weight = 2;
                    $shipping_fee = 15;
                    $extra_fee = 3;
                break;
                
                case 'rule3':
                    $shipment_weight = 3;
                    $shipping_fee = 20;
                    $extra_fee = 6;
                break;
            }
    
            $output = $shipping_fee;
            
            if (ceil($pounds) >= $shipment_weight)
            {
                $output += $extra_fee * (ceil($pounds) - $shipment_weight);
            }
        }
        catch(Exception $e)
        {
            return sprintf("Caught exception: %s\n", $e->getMessage());
        }
        
        return $output;
    }
}
?>