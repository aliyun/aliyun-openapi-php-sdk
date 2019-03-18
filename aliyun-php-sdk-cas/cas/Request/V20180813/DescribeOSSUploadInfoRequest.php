<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeOSSUploadInfo
 *
 * @method string getSourceIp()
 * @method string getOrderId()
 * @method string getDocumentType()
 * @method string getLang()
 */
class DescribeOSSUploadInfoRequest extends \RpcAcsRequest
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
            'DescribeOSSUploadInfo',
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
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->requestParameters['OrderId'] = $orderId;
        $this->queryParameters['OrderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $documentType
     *
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->requestParameters['DocumentType'] = $documentType;
        $this->queryParameters['DocumentType'] = $documentType;

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
