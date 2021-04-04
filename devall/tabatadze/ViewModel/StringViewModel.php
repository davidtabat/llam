<?php

declare(strict_types=1);

namespace devall\tabatadze\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class StringViewModel implements ArgumentInterface
{
    public function getMessage()
    {
        return 'Data passed from viewmodel';
    }
}
