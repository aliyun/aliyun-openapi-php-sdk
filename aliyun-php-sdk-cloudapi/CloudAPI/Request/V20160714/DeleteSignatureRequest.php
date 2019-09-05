<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteSignature
 *
 * @method string getSignatureId()
 * @method string getSecurityToken()
 */
class DeleteSignatureRequest extends \RpcAcsRequest
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
            'DeleteSignature',
            'apigateway'
        );
    }

    /**
     * @param string $signatureId
     *
     * @return $this
     */
    public function setSignatureId($signatureId)
    {
        $this->requestParameters['SignatureId'] = $signatureId;
        $this->queryParameters['SignatureId'] = $signatureId;

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
}
