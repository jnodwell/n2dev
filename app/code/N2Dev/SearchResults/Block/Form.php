<?php
/**
 * Form.php
 *
 * @category  N2Dev
 * @package   N2Dev_SearchResults
 *
 * @copyright Copyright (c) 2017 jennifer nodwell (nodwell.net)
 * @author    jennifer@nodwell.net
 */

namespace N2Dev\SearchResults\Block;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Element\Template\Context;
use N2Dev\SearchResults\Helper\Data;

/**
 * Class Form
 *
 * @package N2Dev\SearchResults\Block
 */
class Form extends \Magento\Framework\View\Element\Template
{
    /**
     * @var
     */
    protected $customerSession;

    protected $helper;

    /**
     * Form constructor.
     *
     * @param Context $context
     * @param Session $customerSession
     */
    public function __construct(
        Context $context,
        Session $customerSession,
    Data $helper,
        array $data = []
    )
    {
        $this->customerSession = $customerSession;
        $this->helper = $helper;
        parent::__construct($context, $data);
        $this->_isScopePrivate = TRUE;
    }

    /**
     * function getFormAction
     *
     * @return string
     */
    public function getFormAction()
    {
        return '/searchresults/index/index';
    }

    /**
     * function setSessionData
     *
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function setSessionData($key, $value)
    {
        return $this->customerSession->setData($key, $value);
    }

    /**
     * function getSessionData
     *
     * @param      $key
     * @param bool $remove
     *
     * @return mixed
     */
    public function getSessionData($key, $remove = FALSE)
    {
        return $this->customerSession->getData($key, $remove);
    }

    public function getSkuList() {
        return $this->customerSession->getSkuList();
    }

    public function getDataHelper() {
        return $this->helper;
    }

}