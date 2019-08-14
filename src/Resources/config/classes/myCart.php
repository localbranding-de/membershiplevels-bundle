<?php


namespace Localbranding\Memberlevels;

class ls_shop_custom_regexp
{


public function myBeforeAddToCart($arrItemInfoToAddToCart, $objProductOrVariant) {

/*

* Example: Add the product code to the cart item information. This

* could be used in the hook "getScalePriceQuantity" to change the way

* the scale price quantity is calculated. For example, all cart items

* with the same product code prefix could be grouped.

*/

$arrItemInfoToAddToCart['productCode'] = $objProductOrVariant->_code;
file_put_contents("test","ye3y");
return $arrItemInfoToAddToCart;

}


}

?>