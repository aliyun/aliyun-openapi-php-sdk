<?php

namespace alimt\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TranslateCertificate
 *
 * @method string getSourceLanguage()
 * @method string getCertificateType()
 * @method string getResultType()
 * @method string getImageUrl()
 * @method string getTargetLanguage()
 */
class TranslateCertificateRequest extends \RpcAcsRequest
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
            'alimt',
            '2018-10-12',
            'TranslateCertificate',
            'alimt'
        );
    }

    /**
     * @param string $sourceLanguage
     *
     * @return $this
     */
    public function setSourceLanguage($sourceLanguage)
    {
        $this->requestParameters['SourceLanguage'] = $sourceLanguage;
        $this->queryParameters['SourceLanguage'] = $sourceLanguage;

        return $this;
    }

    /**
     * @param string $certificateType
     *
     * @return $this
     */
    public function setCertificateType($certificateType)
    {
        $this->requestParameters['CertificateType'] = $certificateType;
        $this->queryParameters['CertificateType'] = $certificateType;

        return $this;
    }

    /**
     * @param string $resultType
     *
     * @return $this
     */
    public function setResultType($resultType)
    {
        $this->requestParameters['ResultType'] = $resultType;
        $this->queryParameters['ResultType'] = $resultType;

        return $this;
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->requestParameters['ImageUrl'] = $imageUrl;
        $this->queryParameters['ImageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * @param string $targetLanguage
     *
     * @return $this
     */
    public function setTargetLanguage($targetLanguage)
    {
        $this->requestParameters['TargetLanguage'] = $targetLanguage;
        $this->queryParameters['TargetLanguage'] = $targetLanguage;

        return $this;
    }
}
