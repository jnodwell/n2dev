<?php
/**
 * N2Dev_TwitterFeed
 *
 * @category    TwitterFeed
 * @package     N2Dev_TwitterFeed
 * @copyright   Copyright (c) 2017 nodwell.net
 * @author      jennifer@nodwell.net
 */

namespace N2Dev\TwitterFeed\Model\Config\Source;

/**
 * N2Dev\TwitterFeed\Model\Config\Source\Theme
 *
 * @category    N2Dev
 * @package     N2Dev_TwitterFeed
 */
class Theme implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            'light' => 'Light',
            'dark' => 'Dark',
        ];
    }
}