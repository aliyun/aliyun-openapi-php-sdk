<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeUserFlowStatistics
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSmartAGId()
 * @method string getStatisticsDate()
 * @method array getUserNamess()
 * @method string getOwnerId()
 */
class DescribeUserFlowStatisticsRequest extends \RpcAcsRequest
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
            'Smartag',
            '2018-03-13',
            'DescribeUserFlowStatistics',
            'smartag'
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
     * @param string $smartAGId
     *
     * @return $this
     */
    public function setSmartAGId($smartAGId)
    {
        $this->requestParameters['SmartAGId'] = $smartAGId;
        $this->queryParameters['SmartAGId'] = $smartAGId;

        return $this;
    }

    /**
     * @param string $statisticsDate
     *
     * @return $this
     */
    public function setStatisticsDate($statisticsDate)
    {
        $this->requestParameters['StatisticsDate'] = $statisticsDate;
        $this->queryParameters['StatisticsDate'] = $statisticsDate;

        return $this;
    }

    /**
     * @param array $userNames
     *
     * @return $this
     */
    public function setUserNamess(array $userNames)
    {
        $this->requestParameters['UserNamess'] = $userNames;
        foreach ($userNames as $i => $iValue) {
            $this->queryParameters['UserNames.' . ($i + 1)] = $iValue;
        }

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
}
