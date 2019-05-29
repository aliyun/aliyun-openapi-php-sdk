<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetNamespaceAuthorizationList
 *
 * @method string getNamespace()
 * @method string getAuthorize()
 */
class GetNamespaceAuthorizationListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/namespace/[Namespace]/authorizations';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetNamespaceAuthorizationList',
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

    /**
     * @param string $authorize
     *
     * @return $this
     */
    public function setAuthorize($authorize)
    {
        $this->requestParameters['Authorize'] = $authorize;
        $this->queryParameters['Authorize'] = $authorize;

        return $this;
    }
}
