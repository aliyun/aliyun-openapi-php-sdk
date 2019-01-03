<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of CreateSystemEvent
 *
 * @method string getResourceOwnerId()
 * @method string getEffectTime()
 * @method string getLimitTime()
 * @method string getAliUid()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getEventType()
 */
class CreateSystemEventRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'CreateSystemEvent',
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
     * @param string $effectTime
     *
     * @return $this
     */
    public function setEffectTime($effectTime)
    {
        $this->requestParameters['EffectTime'] = $effectTime;
        $this->queryParameters['EffectTime'] = $effectTime;

        return $this;
    }

    /**
     * @param string $limitTime
     *
     * @return $this
     */
    public function setLimitTime($limitTime)
    {
        $this->requestParameters['LimitTime'] = $limitTime;
        $this->queryParameters['LimitTime'] = $limitTime;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        $this->requestParameters['AliUid'] = $aliUid;
        $this->queryParameters['AliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

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
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->requestParameters['EventType'] = $eventType;
        $this->queryParameters['EventType'] = $eventType;

        return $this;
    }
}
