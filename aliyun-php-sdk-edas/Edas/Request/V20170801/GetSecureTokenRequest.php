<?php

namespace Edas\Request\V20170801;

/**
 * Request of GetSecureToken
 *
 * @method string getNamespaceId()
 */
class GetSecureTokenRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/secure_token';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'GetSecureToken'
        );
    }

    /**
     * @param string $namespaceId
     *
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->requestParameters['NamespaceId'] = $namespaceId;
        $this->queryParameters['NamespaceId'] = $namespaceId;

        return $this;
    }
}
