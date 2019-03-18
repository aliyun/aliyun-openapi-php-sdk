<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDownloadCertificate
 *
 * @method string getSourceIp()
 * @method string getServerType()
 * @method string getCertificateId()
 * @method string getLang()
 */
class DescribeDownloadCertificateRequest extends \RpcAcsRequest
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
            'DescribeDownloadCertificate',
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
     * @param string $serverType
     *
     * @return $this
     */
    public function setServerType($serverType)
    {
        $this->requestParameters['ServerType'] = $serverType;
        $this->queryParameters['ServerType'] = $serverType;

        return $this;
    }

    /**
     * @param string $certificateId
     *
     * @return $this
     */
    public function setCertificateId($certificateId)
    {
        $this->requestParameters['CertificateId'] = $certificateId;
        $this->queryParameters['CertificateId'] = $certificateId;

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
