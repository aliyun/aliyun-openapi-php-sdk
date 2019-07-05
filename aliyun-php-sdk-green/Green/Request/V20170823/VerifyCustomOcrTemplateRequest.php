<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of VerifyCustomOcrTemplate
 *
 * @method string getTestImgUrl()
 * @method string getSourceIp()
 * @method string getId()
 */
class VerifyCustomOcrTemplateRequest extends \RpcAcsRequest
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
            'VerifyCustomOcrTemplate',
            'green'
        );
    }

    /**
     * @param string $testImgUrl
     *
     * @return $this
     */
    public function setTestImgUrl($testImgUrl)
    {
        $this->requestParameters['TestImgUrl'] = $testImgUrl;
        $this->queryParameters['TestImgUrl'] = $testImgUrl;

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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
