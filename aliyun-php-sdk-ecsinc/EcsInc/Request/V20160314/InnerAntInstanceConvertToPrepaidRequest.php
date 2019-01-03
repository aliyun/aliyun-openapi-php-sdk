<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerAntInstanceConvertToPrepaid
 *
 * @method string getResourceOwnerId()
 * @method string getautoPay()
 * @method string getdryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getchannel()
 * @method string getOwnerId()
 * @method string getbuyerId()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getregionNo()
 * @method string getduration()
 * @method string getconvertDataDisk()
 * @method string getinstanceIds()
 * @method string getaliUid()
 * @method string getbid()
 * @method string getpricingCycle()
 * @method string getproxyId()
 */
class InnerAntInstanceConvertToPrepaidRequest extends \RpcAcsRequest
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
            'InnerAntInstanceConvertToPrepaid',
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
     * @param string $autoPay
     *
     * @return $this
     */
    public function setautoPay($autoPay)
    {
        $this->requestParameters['autoPay'] = $autoPay;
        $this->queryParameters['autoPay'] = $autoPay;

        return $this;
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function setdryRun($dryRun)
    {
        $this->requestParameters['dryRun'] = $dryRun;
        $this->queryParameters['dryRun'] = $dryRun;

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
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
    {
        $this->requestParameters['channel'] = $channel;
        $this->queryParameters['channel'] = $channel;

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
     * @param string $buyerId
     *
     * @return $this
     */
    public function setbuyerId($buyerId)
    {
        $this->requestParameters['buyerId'] = $buyerId;
        $this->queryParameters['buyerId'] = $buyerId;

        return $this;
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        $this->requestParameters['operator'] = $operator;
        $this->queryParameters['operator'] = $operator;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        $this->requestParameters['token'] = $token;
        $this->queryParameters['token'] = $token;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function setregionNo($regionNo)
    {
        $this->requestParameters['regionNo'] = $regionNo;
        $this->queryParameters['regionNo'] = $regionNo;

        return $this;
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function setduration($duration)
    {
        $this->requestParameters['duration'] = $duration;
        $this->queryParameters['duration'] = $duration;

        return $this;
    }

    /**
     * @param string $convertDataDisk
     *
     * @return $this
     */
    public function setconvertDataDisk($convertDataDisk)
    {
        $this->requestParameters['convertDataDisk'] = $convertDataDisk;
        $this->queryParameters['convertDataDisk'] = $convertDataDisk;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        $this->requestParameters['instanceIds'] = $instanceIds;
        $this->queryParameters['instanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setaliUid($aliUid)
    {
        $this->requestParameters['aliUid'] = $aliUid;
        $this->queryParameters['aliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setbid($bid)
    {
        $this->requestParameters['bid'] = $bid;
        $this->queryParameters['bid'] = $bid;

        return $this;
    }

    /**
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function setpricingCycle($pricingCycle)
    {
        $this->requestParameters['pricingCycle'] = $pricingCycle;
        $this->queryParameters['pricingCycle'] = $pricingCycle;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        $this->requestParameters['proxyId'] = $proxyId;
        $this->queryParameters['proxyId'] = $proxyId;

        return $this;
    }
}
