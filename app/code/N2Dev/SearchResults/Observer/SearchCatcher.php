<?php
/**
 * SearchCatcher.php
 *
 * @category  N2Dev
 * @package   N2Dev_SearchResults
 *
 * @copyright Copyright (c) 2017 jennifer nodwell (nodwell.net)
 * @author    jennifer@nodwell.net
 */

namespace N2Dev\SearchResults\Observer;

use Magento\Framework\Event\Observer;
use Magento\Search\Model\QueryFactory;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Action\Context;


/**
 * Class SearchCatcher
 *
 * @package N2Dev_SearchResults
 */
class SearchCatcher implements ObserverInterface
{
    protected $context;
    /**
     * @var QueryFactory
     */
    protected $queryFactory;

    /**
     * @var Data
     */
    protected $helper;

    /**
     * SearchCatcher constructor.
     *
     * @param QueryFactory $queryFactory
     */
    public function __construct(Context $context, QueryFactory $queryFactory)
    {
        $this->queryFactory = $queryFactory;
        $this->context = $context;
    }

    /**
     * function execute
     *
     * @param Observer $observer
     *
     * @return mixed
     */
    public function execute(Observer $observer)
    {

        $collection = $observer->getCollection();
        \Magento\Framework\App\ObjectManager::getInstance()
                                            ->get('Psr\Log\LoggerInterface')->debug(count($collection));
        if (count($collection)==0) {
            $resultRedirect = $this->context->getResultRedirectFactory();
            $resultRedirect->setPath('/searchresults/index/index');

            return $resultRedirect;
        }



    }
}