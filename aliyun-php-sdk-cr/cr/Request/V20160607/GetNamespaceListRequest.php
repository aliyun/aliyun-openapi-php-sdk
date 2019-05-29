<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetNamespaceList
 *
 * @method string getAuthorize()
 * @method string getStatus()
 */
class GetNamespaceListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/namespace';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetNamespaceList',
            'cr'
        );
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

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
