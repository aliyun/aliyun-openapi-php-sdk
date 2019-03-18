<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSignaturePeopleCertificate
 *
 * @method string getPeopleName()
 * @method string getSourceIp()
 * @method string getMobile()
 * @method string getIdentityNumber()
 * @method string getLang()
 * @method string getEmail()
 */
class CreateSignaturePeopleCertificateRequest extends \RpcAcsRequest
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
            'CreateSignaturePeopleCertificate',
            'cas_esign_fdd'
        );
    }

    /**
     * @param string $peopleName
     *
     * @return $this
     */
    public function setPeopleName($peopleName)
    {
        $this->requestParameters['PeopleName'] = $peopleName;
        $this->queryParameters['PeopleName'] = $peopleName;

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
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->requestParameters['Mobile'] = $mobile;
        $this->queryParameters['Mobile'] = $mobile;

        return $this;
    }

    /**
     * @param string $identityNumber
     *
     * @return $this
     */
    public function setIdentityNumber($identityNumber)
    {
        $this->requestParameters['IdentityNumber'] = $identityNumber;
        $this->queryParameters['IdentityNumber'] = $identityNumber;

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

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->requestParameters['Email'] = $email;
        $this->queryParameters['Email'] = $email;

        return $this;
    }
}
