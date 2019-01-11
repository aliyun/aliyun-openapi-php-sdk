<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DeleteSignature
 *
 * @method string getSecurityToken()
 * @method string getSignatureId()
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
}
