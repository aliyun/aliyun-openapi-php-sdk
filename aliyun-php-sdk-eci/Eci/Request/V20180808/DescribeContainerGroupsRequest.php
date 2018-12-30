<?php

namespace Eci\Request\V20180808;

/**
 * Class DescribeContainerGroupsRequest
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2019 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/aliyun-openapi-php-sdk
 *
 * @method string getResourceOwnerId()
 * @method string getContainerGroupIds()
 * @method string getNextToken()
 * @method string getLimit()
 * @method array getTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getContainerGroupName()
 * @method string getZoneId()
 * @method string getStatus()
 */
class DescribeContainerGroupsRequest extends \RpcAcsRequest
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
            'Eci',
            '2018-08-08',
            'DescribeContainerGroups',
            'eci',
            'openAPI'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;
        return $this;
    }

    /**
     * @param string $containerGroupIds
     *
     * @return $this
     */
    public function setContainerGroupIds($containerGroupIds)
    {
        $this->requestParameters['ContainerGroupIds'] = $containerGroupIds;
        $this->queryParameters['ContainerGroupIds'] = $containerGroupIds;
        return $this;
    }

    /**
     * @param string $nextToken
     *
     * @return $this
     */
    public function setNextToken($nextToken)
    {
        $this->requestParameters['NextToken'] = $nextToken;
        $this->queryParameters['NextToken'] = $nextToken;
        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;
        return $this;
    }

    /**
     * @param array $Tags
     *
     * @return $this
     */
    public function setTags(array $Tags)
    {
        $this->requestParameters['Tags'] = $Tags;
        foreach ($Tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $Tags[$i]['Key'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
        }
        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;
        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;
        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;
        return $this;
    }

    /**
     * @param string $containerGroupName
     *
     * @return $this
     */
    public function setContainerGroupName($containerGroupName)
    {
        $this->requestParameters['ContainerGroupName'] = $containerGroupName;
        $this->queryParameters['ContainerGroupName'] = $containerGroupName;
        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;
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
