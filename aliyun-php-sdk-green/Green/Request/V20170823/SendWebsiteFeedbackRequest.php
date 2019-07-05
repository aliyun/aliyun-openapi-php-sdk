<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SendWebsiteFeedback
 *
 * @method string getFeedback()
 * @method string getUrls()
 * @method string getSourceIp()
 * @method string getLang()
 */
class SendWebsiteFeedbackRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Green',
            '2017-08-23',
            'SendWebsiteFeedback',
            'green'
        );
    }

    /**
     * @param string $feedback
     *
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->requestParameters['Feedback'] = $feedback;
        $this->queryParameters['Feedback'] = $feedback;

        return $this;
    }

    /**
     * @param string $urls
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->requestParameters['Urls'] = $urls;
        $this->queryParameters['Urls'] = $urls;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
