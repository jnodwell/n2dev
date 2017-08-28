<?php
/**
 * Index.php
 *
 * @category  N2Dev
 * @package   N2Dev_
 *
 * @copyright Copyright (c) 2017 jennifer nodwell (nodwell.net)
 * @author    jennifer@nodwell.net
 */
namespace N2Dev\SearchResults\Plugin\Result;

use Magento\Catalog\Model\Layer\Resolver as LayerResolver;
use Magento\CatalogSearch\Helper\Data;
use Magento\Search\Model\QueryFactory;


class Index {


    public function __construct(
        LayerResolver $layerResolver,
        Data $catalogSearchData,
        QueryFactory $queryFactory,
        array $data = []
    ) {
        $this->catalogLayer = $layerResolver->get();
        $this->catalogSearchData = $catalogSearchData;
        $this->queryFactory = $queryFactory;
    }

    public function getNoResultText($subject, \Closure $proceed)
    {
        $this->var_error_log('oh whatever');
        $returnValue = $proceed();
        die();
        if ($this->catalogSearchData->isMinQueryLength()) {
            return $proceed();
        }
        die();
    }

    function var_error_log( $object=null ){
        ob_start();                    // start buffer capture
        var_dump( $object );           // dump the values
        $contents = ob_get_contents(); // put the buffer into a variable
        ob_end_clean();                // end capture
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        $logger->debug( $contents );        // log contents of the result of var_dump( $object )
    }
}