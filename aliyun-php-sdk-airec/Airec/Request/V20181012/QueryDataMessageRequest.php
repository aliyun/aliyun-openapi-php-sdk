<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryDataMessage
 *
 * @method string getItemId()
 * @method string getInstanceId()
 * @method string getItemType()
 * @method string getCmdType()
 * @method string getSize()
 * @method string getEndTime()
 * @method string getUserType()
 * @method string getStartTime()
 * @method string getPage()
 * @method string getUserId()
 * @method string getTable()
 */
class QueryDataMessageRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/instances/[InstanceId]/tables/[Table]/data-message';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Airec',
            '2018-10-12',
            'QueryDataMessage',
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
     * @param string $cmdType
     *
     * @return $this
     */
    public function setCmdType($cmdType)
    {
        $this->requestParameters['CmdType'] = $cmdType;
        $this->queryParameters['CmdType'] = $cmdType;

        return $this;
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->requestParameters['Size'] = $size;
        $this->queryParameters['Size'] = $size;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

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
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->requestParameters['Page'] = $page;
        $this->queryParameters['Page'] = $page;

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
