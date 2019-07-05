<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateKeyword
 *
 * @method string getSourceIp()
 * @method string getKeywords()
 * @method string getKeywordLibId()
 * @method string getLang()
 */
class CreateKeywordRequest extends \RpcAcsRequest
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
            'CreateKeyword',
            'green'
        );
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
     * @param string $keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->requestParameters['Keywords'] = $keywords;
        $this->queryParameters['Keywords'] = $keywords;

        return $this;
    }

    /**
     * @param string $keywordLibId
     *
     * @return $this
     */
    public function setKeywordLibId($keywordLibId)
    {
        $this->requestParameters['KeywordLibId'] = $keywordLibId;
        $this->queryParameters['KeywordLibId'] = $keywordLibId;

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
