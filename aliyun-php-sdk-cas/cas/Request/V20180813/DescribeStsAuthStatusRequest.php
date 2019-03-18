<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeStsAuthStatus
 *
 * @method string getSourceIp()
 * @method string getCloudProduct()
 * @method string getLang()
 */
class DescribeStsAuthStatusRequest extends \RpcAcsRequest
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
            'cas',
            '2018-08-13',
            'DescribeStsAuthStatus',
            'cas_esign_fdd'
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
     * @param string $cloudProduct
     *
     * @return $this
     */
    public function setCloudProduct($cloudProduct)
    {
        $this->requestParameters['CloudProduct'] = $cloudProduct;
        $this->queryParameters['CloudProduct'] = $cloudProduct;

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
