<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyInstanceMaintenanceAttributes
 *
 * @method string getResourceOwnerId()
 * @method array getMaintenanceWindows()
 * @method string getActionOnMaintenance()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getInstanceIds()
 */
class ModifyInstanceMaintenanceAttributesRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ModifyInstanceMaintenanceAttributes',
            'ecs'
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
     * @param array $maintenanceWindow
     *
     * @return $this
     */
	public function setMaintenanceWindows(array $maintenanceWindow)
	{
	    $this->requestParameters['MaintenanceWindows'] = $maintenanceWindow;
		foreach ($maintenanceWindow as $depth1 => $depth1Value) {
			$this->queryParameters['MaintenanceWindow.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			$this->queryParameters['MaintenanceWindow.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
		}

		return $this;
    }

    /**
     * @param string $actionOnMaintenance
     *
     * @return $this
     */
    public function setActionOnMaintenance($actionOnMaintenance)
    {
        $this->requestParameters['ActionOnMaintenance'] = $actionOnMaintenance;
        $this->queryParameters['ActionOnMaintenance'] = $actionOnMaintenance;

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
     * @param array $instanceId
     *
     * @return $this
     */
	public function setInstanceIds(array $instanceId)
	{
	    $this->requestParameters['InstanceIds'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->queryParameters['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
