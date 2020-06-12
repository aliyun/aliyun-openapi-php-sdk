<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryRawData
 *
 * @method string getItemId()
 * @method string getInstanceId()
 * @method string getItemType()
 * @method string getUserType()
 * @method string getUserId()
 * @method string getTable()
 */
class QueryRawDataRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/instances/[InstanceId]/tables/[Table]/raw-data';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Airec',
            '2018-10-12',
            'QueryRawData',
            'airec'
        );
    }

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->requestParameters['ItemId'] = $itemId;
        $this->queryParameters['ItemId'] = $itemId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $itemType
     *
     * @return $this
     */
    public function setItemType($itemType)
    {
        $this->requestParameters['ItemType'] = $itemType;
        $this->queryParameters['ItemType'] = $itemType;

        return $this;
    }

    /**
     * @param string $userType
     *
     * @return $this
     */
    public function setUserType($userType)
    {
        $this->requestParameters['UserType'] = $userType;
        $this->queryParameters['UserType'] = $userType;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $table
     *
     * @return $this
     */
    public function setTable($table)
    {
        $this->requestParameters['Table'] = $table;
        $this->pathParameters['Table'] = $table;

        return $this;
    }
}
