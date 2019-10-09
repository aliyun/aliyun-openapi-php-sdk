<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteKeyword
 *
 * @method string getKeywords()
 * @method string getKeywordLibId()
 * @method string getSourceIp()
 * @method string getIds()
 * @method string getLang()
 */
class DeleteKeywordRequest extends \RpcAcsRequest
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
            'DeleteKeyword',
            'green'
        );
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
     * @param string $ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->requestParameters['Ids'] = $ids;
        $this->queryParameters['Ids'] = $ids;

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
