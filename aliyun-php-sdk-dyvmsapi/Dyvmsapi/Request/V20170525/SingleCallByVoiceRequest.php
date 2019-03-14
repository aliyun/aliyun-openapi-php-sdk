<?php

namespace Dyvmsapi\Request\V20170525;

/**
 * Request of SingleCallByVoice
 *
 * @method string getVolume()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCalledNumber()
 * @method string getVoiceCode()
 * @method string getCalledShowNumber()
 * @method string getPlayTimes()
 * @method string getOutId()
 * @method string getOwnerId()
 * @method string getSpeed()
 */
class SingleCallByVoiceRequest extends \RpcAcsRequest
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
            'Dyvmsapi',
            '2017-05-25',
            'SingleCallByVoice',
            'dyvmsapi'
        );
    }

    /**
     * @param string $volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->requestParameters['Volume'] = $volume;
        $this->queryParameters['Volume'] = $volume;

        return $this;
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
     * @param string $calledNumber
     *
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        $this->requestParameters['CalledNumber'] = $calledNumber;
        $this->queryParameters['CalledNumber'] = $calledNumber;

        return $this;
    }

    /**
     * @param string $voiceCode
     *
     * @return $this
     */
    public function setVoiceCode($voiceCode)
    {
        $this->requestParameters['VoiceCode'] = $voiceCode;
        $this->queryParameters['VoiceCode'] = $voiceCode;

        return $this;
    }

    /**
     * @param string $calledShowNumber
     *
     * @return $this
     */
    public function setCalledShowNumber($calledShowNumber)
    {
        $this->requestParameters['CalledShowNumber'] = $calledShowNumber;
        $this->queryParameters['CalledShowNumber'] = $calledShowNumber;

        return $this;
    }

    /**
     * @param string $playTimes
     *
     * @return $this
     */
    public function setPlayTimes($playTimes)
    {
        $this->requestParameters['PlayTimes'] = $playTimes;
        $this->queryParameters['PlayTimes'] = $playTimes;

        return $this;
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function setOutId($outId)
    {
        $this->requestParameters['OutId'] = $outId;
        $this->queryParameters['OutId'] = $outId;

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
