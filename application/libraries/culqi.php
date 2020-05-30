<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Culqi {
    public function charge($token,$price,$email){
        require 'Requests/library/Requests.php';
        Requests::register_autoloader();
        require 'culqi-php/lib/culqi.php';
        
        
        $SECRET_KEY = "sk_test_2755b0643ba7ee33";
        $culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));
        
        $charge = $culqi->Charges->create(
                array(
                  "amount" => $price,
                  "capture" => true,
                  "currency_code" => "PEN",
                  "description" => "Venta de Producto y/o Servicios",
                  "email" => "$email",
                  "installments" => 0,
                  "source_id" => "$token"
                )
            );
        return $charge;
    }
}

