<?php

namespace Mts\Request\V20140618;

/**
 * Request of AddPipeline
 *
 * @method string getResourceOwnerId()
 * @method string getRole()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getNotifyConfig()
 * @method string getOwnerId()
 * @method string getSpeedLevel()
 * @method string getSpeed()
 */
class AddPipelineRequest extends \RpcAcsRequest
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
            'Mts',
            '2014-06-18',
            'AddPipeline',
            'mts'
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
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->requestParameters['Role'] = $role;
        $this->queryParameters['Role'] = $role;

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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $notifyConfig
     *
     * @return $this
     */
    public function setNotifyConfig($notifyConfig)
    {
        $this->requestParameters['NotifyConfig'] = $notifyConfig;
        $this->queryParameters['NotifyConfig'] = $notifyConfig;

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
     * @param string $speedLevel
     *
     * @return $this
     */
    public function setSpeedLevel($speedLevel)
    {
        $this->requestParameters['SpeedLevel'] = $speedLevel;
        $this->queryParameters['SpeedLevel'] = $speedLevel;

        return $this;
    }

    /**
     * @param string $speed
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->requestParameters['Speed'] = $speed;
        $this->queryParameters['Speed'] = $speed;

        return $this;
    }
}
