<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GrantDbToAccount
 *
 * @method string getAccountName()
 * @method string getDbName()
 * @method string getDbInstanceId()
 * @method string getAccountPrivilege()
 */
class GrantDbToAccountRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'GrantDbToAccount',
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
     * @param string $dbName
     *
     * @return $this
     */
    public function setDbName($dbName)
    {
        $this->requestParameters['DbName'] = $dbName;
        $this->queryParameters['DbName'] = $dbName;

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

    /**
     * @param string $accountPrivilege
     *
     * @return $this
     */
    public function setAccountPrivilege($accountPrivilege)
    {
        $this->requestParameters['AccountPrivilege'] = $accountPrivilege;
        $this->queryParameters['AccountPrivilege'] = $accountPrivilege;

        return $this;
    }
}
