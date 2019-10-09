<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExportKeywords
 *
 * @method string getKeywordLibId()
 * @method string getSourceIp()
 */
class ExportKeywordsRequest extends \RpcAcsRequest
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
            'ExportKeywords',
            'green'
        );
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
}
