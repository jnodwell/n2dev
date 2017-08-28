<?php
/**
 * N2Dev_TwitterFeed
 *
 * @category    TwitterFeed
 * @package     N2Dev_TwitterFeed
 * @copyright   Copyright (c) 2017 nodwell.net
 * @author      jennifer@nodwell.net
 */

namespace N2Dev\TwitterFeed\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * N2Dev\Connector\Helper\Data
 *
 * @category    N2Dev
 * @package     N2Dev_Connector
 */
class Data extends AbstractHelper {

    /**
     * Config paths
     *
     * @var string
     */
    const CONFIG_TWITTERFEED_FOLLOWID = "n2dev_twitterfeed/twitterfeed_settings/followid";
    const CONFIG_TWITTERFEED_DATAWIDTH = "n2dev_twitterfeed/twitterfeed_settings/datawidth";
    const CONFIG_TWITTERFEED_DATAHEIGHT = "n2dev_twitterfeed/twitterfeed_settings/dataheight";
    const CONFIG_TWITTERFEED_COLOR = "n2dev_twitterfeed/twitterfeed_settings/color";
    const CONFIG_TWITTERFEED_LINKCOLOR = "n2dev_twitterfeed/twitterfeed_settings/link_color";
    const CONFIG_TWITTERFEED_BUTTONSHOW = "n2dev_twitterfeed/twitterfeed_button/showbutton";
    const CONFIG_TWITTERFEED_BUTTONSIZE = "n2dev_twitterfeed/twitterfeed_button/datasize";
    const CONFIG_TWITTERFEED_BUTTONSHOWNAME = "n2dev_twitterfeed/twitterfeed_button/datashowscreen";
    const CONFIG_TWITTERFEED_BUTTONSHOWCOUNT = "n2dev_twitterfeed/twitterfeed_button/datashowcount";
    const CONFIG_TWITTERFEED_MENTIONSHOW = "n2dev_twitterfeed/twitterfeed_mention/showbutton";
    const CONFIG_TWITTERFEED_MENTIONSIZE = "n2dev_twitterfeed/twitterfeed_mention/mentionsize";
    const CONFIG_TWITTERFEED_MENTIONPREFILL = "n2dev_twitterfeed/twitterfeed_mention/prefill";
    const CONFIG_TWITTERFEED_MENTIONRECONE = "n2dev_twitterfeed/twitterfeed_mention/rec_one";
    const CONFIG_TWITTERFEED_MENTIONRECTWO = "n2dev_twitterfeed/twitterfeed_mention/rec_two";

    /**
     * Get TwitterFeed followid  By Website Id from Config
     *
     * @param integer $websiteId
     *
     * @return string
     */
    public function getTwitterFeedFollowid() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_FOLLOWID,
                                            ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get TwitterFeed dataheight  By Website Id from Config
     *
     * @param integer $websiteId
     *
     * @return string
     */
    public function getTwitterFeedDataHeight() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_DATAHEIGHT,
                                            ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get TwitterFeed datawidth  By Website Id from Config
     *
     * @param integer $websiteId
     *
     * @return string
     */
    public function getTwitterFeedDataWidth() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_DATAWIDTH,
                                            ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get TwitterFeed color  By Website Id from Config
     *
     * @param integer $websiteId
     *
     * @return string
     */
    public function getTwitterFeedDataTheme() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_COLOR,
                                            ScopeInterface::SCOPE_STORE);
    }

    /*
    * Get TwitterFeed link color  By Website Id from Config
    *
    * @param integer $websiteId
    * @return string
    */
    public function getTwitterFeedLinkColor() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_LINKCOLOR,
                                            ScopeInterface::SCOPE_STORE);
    }


    /*
    * Get TwitterFeed Button Size  By Website Id from Config
    *
    * @param integer $websiteId
    * @return string
    */
    public function getTwitterFeedButtonDataSize() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_BUTTONSIZE,
                                            ScopeInterface::SCOPE_STORE);
    }

    /*
    * Get TwitterFeed Button Show Name  By Website Id from Config
    *
    * @param integer $websiteId
    * @return string
    */
    public function getTwitterFeedButtonDataShowScreenname() {
        $value = $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_BUTTONSHOWNAME,
                                              ScopeInterface::SCOPE_STORE);
        if ($value === 'yes') {
            $value = 'true';
        } else {
            $value = 'false';
        }

        return $value;
    }

    /*
    * Get TwitterFeed Button Show Count  By Website Id from Config
    *
    * @param integer $websiteId
    * @return string
    */
    public function getTwitterFeedButtonDataShowCount() {

        $value = $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_BUTTONSHOWCOUNT,
                                              ScopeInterface::SCOPE_STORE);
        if ($value === 'yes') {
            $value = 'true';
        } else {
            $value = 'false';
        }

        return $value;
    }

    /*
    * Get TwitterFeed Button Show Count  By Website Id from Config
    *
    * @param integer $websiteId
    * @return boolean
    */
    public function getTwitterFeedShowButton() {

        $value = $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_BUTTONSHOW,
                                              ScopeInterface::SCOPE_STORE);

        if ($value == 1) {
            $value = true;
        } else {
            $value = false;
        }

        return $value;
    }

    /*
    * Get TwitterFeed Mention Show   By Website Id from Config
    *
    * @param integer $websiteId
    * @return boolean
    */
    public function getTwitterFeedMentionShow() {

        $value = $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_MENTIONSHOW,
                                              ScopeInterface::SCOPE_STORE);
        if ($value == 1) {
            $value = true;
        } else {
            $value = false;
        }

        return $value;
    }

    /*
    * Get TwitterFeed Mention Button Size  By Website Id from Config
    *
    * @param integer $websiteId
    * @return string
    */
    public function getTwitterFeedMentionDataSize() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_MENTIONSIZE,
                                            ScopeInterface::SCOPE_STORE);
    }

    /*
    * Get TwitterFeed Mention Prefill Text   By Website Id from Config
    *
    * @param integer $websiteId
    * @return string
    */
    public function getTwitterFeedMentionPrefill() {
        return $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_MENTIONPREFILL,
                                            ScopeInterface::SCOPE_STORE);
    }

    /*
    * Get TwitterFeed Mention rec one Text   By Website Id from Config
    *
    * @param integer $websiteId
    * @return string
    */
    public function getTwitterFeedMentionRelated() {
        $one = $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_MENTIONRECONE,
                                            ScopeInterface::SCOPE_STORE);
        $two = $this->scopeConfig->getValue(self::CONFIG_TWITTERFEED_MENTIONRECTWO,
                                            ScopeInterface::SCOPE_STORE);
        if ($one != null) {
            $related = $one;
            if ($two != null) {
                $related = $related . ',' . $two;
            }
        } else if ($two != null) {
            $related = $two;
        }

        return $related;
    }

}
