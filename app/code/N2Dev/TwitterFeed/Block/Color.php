<?php
/**
 * N2Dev_TwitterFeed
 *
 * @category    TwitterFeed
 * @package     N2Dev_TwitterFeed
 * @copyright   Copyright (c) 2017 nodwell.net
 * @author      jennifer@nodwell.net
 */

namespace N2Dev\TwitterFeed\Block;

use Magento\Config\Block\System\Config\Form\Field;

/**
 * Color
 *
 * @category    N2Dev
 * @package     N2Dev_TwitterFeed
 */
class Color extends Field {

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $html = $element->getElementHtml();
        $value = $element->getData('value');

        $html .= '<script type="text/javascript">
            require(["jquery"], function ($) {
                $(document).ready(function () {
                    var $el = $("#' . $element->getHtmlId() . '");
                    $el.css("backgroundColor", "'. $value .'");

                    // Attach the color picker
                    $el.ColorPicker({
                        color: "'. $value .'",
                        onChange: function (hsb, hex, rgb) {
                            $el.css("backgroundColor", "#" + hex).val("#" + hex);
                        }
                    });
                });
            });
            </script>';
        return $html;
    }

}