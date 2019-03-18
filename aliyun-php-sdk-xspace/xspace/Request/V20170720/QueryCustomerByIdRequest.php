<?php

namespace xspace\Request\V20170720;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryCustomerById
 *
 * @method string getId()
 */
class QueryCustomerByIdRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/customer';

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
            'xspace',
            '2017-07-20',
            'QueryCustomerById'
        );
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
