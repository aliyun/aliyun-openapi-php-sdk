<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRdsAccounts
 *
 * @method string getAccountName()
 * @method string getDbInstanceId()
 */
class DescribeRdsAccountsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'retailcloud',
            '2018-03-13',
            'DescribeRdsAccounts',
            'retailcloud'
        );
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->requestParameters['AccountName'] = $accountName;
        $this->queryParameters['AccountName'] = $accountName;

        return $this;
    }

    /**
     * @param string $dbInstanceId
     *
     * @return $this
     */
    public function setDbInstanceId($dbInstanceId)
    {
        $this->requestParameters['DbInstanceId'] = $dbInstanceId;
        $this->queryParameters['DbInstanceId'] = $dbInstanceId;

        return $this;
    }
}
