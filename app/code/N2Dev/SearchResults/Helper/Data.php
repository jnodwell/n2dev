<?php
/**
 * Data.php
 *
 * @category  N2Dev
 * @package   N2Dev_
 *
 * @copyright Copyright (c) 2017 jennifer nodwell (nodwell.net)
 * @author    jennifer@nodwell.net
 */

namespace N2Dev\SearchResults\Helper;

use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue(
            $config_path,
            ScopeInterface::SCOPE_STORE
        );
    }
}