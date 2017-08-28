<?php
/**
 * Index.php
 *
 * @category  N2Dev
 * @package   N2Dev_SearchResults
 *
 * @copyright Copyright (c) 2017 jennifer nodwell (nodwell.net)
 * @author    jennifer@nodwell.net
 */
namespace N2Dev\SearchResults\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 *
 * @package N2Dev\SearchResults\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;
    protected $customerSession;

    /**
     * Index constructor.
     *
     * @param Context                                    $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(Context $context,
                                PageFactory $resultPageFactory,
                                Session $customerSession)
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->customerSession = $customerSession;
        parent::__construct($context);
    }

    /**
     * function execute
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $post = $this->getRequest()->getPost();
        var_dump($post);

        if (count($post) > 0) {
            if (count($post['checkbox']) > 0) {
                $this->deleteRowFromSession($post['checkbox']);
            }
            // Retrieve your form data
            $sku = $post['sku'];
            $qty = $post['qty'];

            if(empty($sku) || empty($qty)) {
                //if sku or qty is empty, return and do nothing.
                if (count($post['checkbox'])==0) {
                    $this->messageManager->addErrorMessage("You must provide a product number and a quantity");
                }
            } else {
                $this->addRowToSession(array('sku'=>$sku,'qty'=>$qty));
            }

        }
        $resultPage = $this->_resultPageFactory->create();

        return $resultPage;
    }

    private function deleteRowFromSession($rows)
    {
        $skulist = $this->customerSession->getSkuList();
        $count = 0;
        if (count($skulist) > 0) {
            foreach ($rows as $row) {
                foreach($skulist as $skurow) {
                    if ($skurow['sku'] === $row) {
                        array_splice($skulist, $count, 1);                    }
                    $count++;
                }
            }
            $this->customerSession->setSkuList($skulist);
        }
    }

    private function addRowToSession($row) {
        $skulist = $this->customerSession->getSkuList();
        $sku = $row['sku'];
        $found = false;
        if (count($skulist) > 0) {
            foreach ($skulist as $skurow) {
                if ($skurow['sku'] === $sku) {
                    $skurow['qty'] = $row['qty'];
                    $found = TRUE;
                }
            }
        }
        if (!$found) {
            $skulist[] = $row;
        }
        $this->customerSession->setSkuList($skulist);
    }

}