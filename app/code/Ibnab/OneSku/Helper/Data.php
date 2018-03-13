<?php
namespace Ibnab\OneSku\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Catalog data helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * ScopeConfigInterface scopeConfig
     *
     * @var scopeConfig
     */
    protected $scopeConfig;
    /**
     * @param CustomerSession $customerSession
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
    public function allowExtension(){
     return  $this->scopeConfig->getValue('ibnab_onesku_config/general/enable', ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }  
}
