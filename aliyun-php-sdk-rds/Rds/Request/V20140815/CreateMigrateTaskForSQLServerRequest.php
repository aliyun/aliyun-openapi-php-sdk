<?php

namespace Rds\Request\V20140815;

/**
 * Request of CreateMigrateTaskForSQLServer
 *
 * @method string getResourceOwnerId()
 * @method string getTaskType()
 * @method string getDBName()
 * @method string getResourceOwnerAccount()
 * @method string getIsOnlineDB()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 * @method string getOSSUrls()
 */
class CreateMigrateTaskForSQLServerRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'CreateMigrateTaskForSQLServer',
            'rds'
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
     * @param string $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->requestParameters['TaskType'] = $taskType;
        $this->queryParameters['TaskType'] = $taskType;

        return $this;
    }

    /**
     * @param string $dBName
     *
     * @return $this
     */
    public function setDBName($dBName)
    {
        $this->requestParameters['DBName'] = $dBName;
        $this->queryParameters['DBName'] = $dBName;

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
     * @param string $isOnlineDB
     *
     * @return $this
     */
    public function setIsOnlineDB($isOnlineDB)
    {
        $this->requestParameters['IsOnlineDB'] = $isOnlineDB;
        $this->queryParameters['IsOnlineDB'] = $isOnlineDB;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

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
     * @param string $oSSUrls
     *
     * @return $this
     */
    public function setOSSUrls($oSSUrls)
    {
        $this->requestParameters['OSSUrls'] = $oSSUrls;
        $this->queryParameters['OSSUrls'] = $oSSUrls;

        return $this;
    }
}
