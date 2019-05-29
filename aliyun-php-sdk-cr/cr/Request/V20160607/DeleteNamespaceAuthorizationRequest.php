<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteNamespaceAuthorization
 *
 * @method string getAuthorizeId()
 * @method string getNamespace()
 */
class DeleteNamespaceAuthorizationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/namespace/[Namespace]/authorizations/[AuthorizeId]';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'DeleteNamespaceAuthorization',
            'cr'
        );
    }

    /**
     * @param string $authorizeId
     *
     * @return $this
     */
    public function setAuthorizeId($authorizeId)
    {
        $this->requestParameters['AuthorizeId'] = $authorizeId;
        $this->pathParameters['AuthorizeId'] = $authorizeId;

        return $this;
    }

    /**
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->requestParameters['Namespace'] = $namespace;
        $this->pathParameters['Namespace'] = $namespace;

        return $this;
    }
}
