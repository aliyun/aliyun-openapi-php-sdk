<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCertificateName
 *
 * @method string getSourceIp()
 * @method string getCertificateId()
 * @method string getName()
 * @method string getLang()
 */
class CreateCertificateNameRequest extends \RpcAcsRequest
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
            'CreateCertificateName',
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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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
