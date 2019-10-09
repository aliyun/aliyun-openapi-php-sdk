<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeBizTypes
 *
 * @method string getImportFlag()
 * @method string getSourceIp()
 */
class DescribeBizTypesRequest extends \RpcAcsRequest
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
            'DescribeBizTypes',
            'green'
        );
    }

    /**
     * @param string $importFlag
     *
     * @return $this
     */
    public function setImportFlag($importFlag)
    {
        $this->requestParameters['ImportFlag'] = $importFlag;
        $this->queryParameters['ImportFlag'] = $importFlag;

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
