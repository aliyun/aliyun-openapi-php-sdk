<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateNamespaceAuthorization
 *
 * @method string getNamespace()
 */
class CreateNamespaceAuthorizationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/namespace/[Namespace]/authorizations';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'CreateNamespaceAuthorization',
            'cr'
        );
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
