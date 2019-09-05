<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSignature
 *
 * @method string getSignatureName()
 * @method string getSignatureSecret()
 * @method string getSecurityToken()
 * @method string getSignatureKey()
 */
class CreateSignatureRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'CreateSignature',
            'apigateway'
        );
    }

    /**
     * @param string $signatureName
     *
     * @return $this
     */
    public function setSignatureName($signatureName)
    {
        $this->requestParameters['SignatureName'] = $signatureName;
        $this->queryParameters['SignatureName'] = $signatureName;

        return $this;
    }

    /**
     * @param string $signatureSecret
     *
     * @return $this
     */
    public function setSignatureSecret($signatureSecret)
    {
        $this->requestParameters['SignatureSecret'] = $signatureSecret;
        $this->queryParameters['SignatureSecret'] = $signatureSecret;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $signatureKey
     *
     * @return $this
     */
    public function setSignatureKey($signatureKey)
    {
        $this->requestParameters['SignatureKey'] = $signatureKey;
        $this->queryParameters['SignatureKey'] = $signatureKey;

        return $this;
    }
}
