<?php
/**
 * Data.php
 *
 * @category  N2Dev
 * @package   N2Dev_AddThis
 * @copyright Copyright (c) 2017 nodwell.net (www.nodwell.net)
 * @author    jennifer@nodwell.net
 */

namespace N2Dev\AddThis\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * N2Dev\AddThis\Helper\Data
 *
 * @category    N2Dev
 * @package     N2Dev_AddThis
 */
class Data extends AbstractHelper {

    /**
     * Config paths
     *
     * @var string
     */
    const CONFIG_ADDTHIS_PUBID = "n2dev_addthis/addthis_pubid/pubid";


    /**
     * Get AddThis pubid  By Website Id from Config
     *
     * @param integer $websiteId
     *
     * @return string
     */
    public function getAddThisPubid() {
        return $this->scopeConfig->getValue(self::CONFIG_ADDTHIS_PUBID,
                                            ScopeInterface::SCOPE_STORE);
    }
}
