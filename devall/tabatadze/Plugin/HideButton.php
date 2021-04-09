<?php
namespace Devall\Tabatadze\Plugin;
use Magento\Catalog\Model\Product;
class HideButton
{
    public function afterIsSaleable(Product $_product)
    {
        if ($_product->getData('expiry_date') < date('Y-m-d H:m:s')) {
            return false;
        }
        return true;
    }
}
