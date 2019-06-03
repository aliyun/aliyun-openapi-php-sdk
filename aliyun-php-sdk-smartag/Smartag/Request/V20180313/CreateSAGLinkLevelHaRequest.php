<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSAGLinkLevelHa
 *
 * @method string getResourceOwnerId()
 * @method string getBackupLinkId()
 * @method string getResourceOwnerAccount()
 * @method string getHaType()
 * @method string getOwnerAccount()
 * @method string getMainLinkRegionId()
 * @method string getSmartAGId()
 * @method string getOwnerId()
 * @method string getMainLinkId()
 * @method string getBackupLinkRegionId()
 */
class CreateSAGLinkLevelHaRequest extends \RpcAcsRequest
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
            'CreateSAGLinkLevelHa',
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
     * @param string $backupLinkId
     *
     * @return $this
     */
    public function setBackupLinkId($backupLinkId)
    {
        $this->requestParameters['BackupLinkId'] = $backupLinkId;
        $this->queryParameters['BackupLinkId'] = $backupLinkId;

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
     * @param string $haType
     *
     * @return $this
     */
    public function setHaType($haType)
    {
        $this->requestParameters['HaType'] = $haType;
        $this->queryParameters['HaType'] = $haType;

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
     * @param string $mainLinkRegionId
     *
     * @return $this
     */
    public function setMainLinkRegionId($mainLinkRegionId)
    {
        $this->requestParameters['MainLinkRegionId'] = $mainLinkRegionId;
        $this->queryParameters['MainLinkRegionId'] = $mainLinkRegionId;

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
     * @param string $mainLinkId
     *
     * @return $this
     */
    public function setMainLinkId($mainLinkId)
    {
        $this->requestParameters['MainLinkId'] = $mainLinkId;
        $this->queryParameters['MainLinkId'] = $mainLinkId;

        return $this;
    }

    /**
     * @param string $backupLinkRegionId
     *
     * @return $this
     */
    public function setBackupLinkRegionId($backupLinkRegionId)
    {
        $this->requestParameters['BackupLinkRegionId'] = $backupLinkRegionId;
        $this->queryParameters['BackupLinkRegionId'] = $backupLinkRegionId;

        return $this;
    }
}
