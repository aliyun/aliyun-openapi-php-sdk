<?php

namespace dcdn\Request\V20180115;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDcdnDomainByCertificate
 *
 * @method string getOwnerId()
 * @method string getSSLPub()
 */
class DescribeDcdnDomainByCertificateRequest extends \RpcAcsRequest
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
            'dcdn',
            '2018-01-15',
            'DescribeDcdnDomainByCertificate'
        );
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $sSLPub
     *
     * @return $this
     */
    public function setSSLPub($sSLPub)
    {
        $this->requestParameters['SSLPub'] = $sSLPub;
        $this->queryParameters['SSLPub'] = $sSLPub;

        return $this;
    }
}
