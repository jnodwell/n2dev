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
 * N2Dev\TwitterFeed\Model\Config\Source\Size
 *
 * @category    N2Dev
 * @package     N2Dev_TwitterFeed
 */
class Size implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            'large' => 'Large',
            'small' => 'Small',
        ];
    }
}