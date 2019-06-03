<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetEnduserStatus
 *
 * @method string getUid()
 * @method string getPrimaryAccount()
 * @method string getStatus()
 * @method string getBusinessType()
 */
class SetEnduserStatusRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'SetEnduserStatus'
        );
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->requestParameters['Uid'] = $uid;
        $this->queryParameters['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $primaryAccount
     *
     * @return $this
     */
    public function setPrimaryAccount($primaryAccount)
    {
        $this->requestParameters['PrimaryAccount'] = $primaryAccount;
        $this->queryParameters['PrimaryAccount'] = $primaryAccount;

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

    /**
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        $this->requestParameters['BusinessType'] = $businessType;
        $this->queryParameters['BusinessType'] = $businessType;

        return $this;
    }
}
