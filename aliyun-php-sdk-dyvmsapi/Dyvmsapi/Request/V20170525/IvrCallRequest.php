<?php

namespace Dyvmsapi\Request\V20170525;

/**
 * Request of IvrCall
 *
 * @method string getByeCode()
 * @method array getMenuKeyMaps()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getStartTtsParams()
 * @method string getPlayTimes()
 * @method string getOwnerId()
 * @method string getTimeout()
 * @method string getStartCode()
 * @method string getCalledNumber()
 * @method string getCalledShowNumber()
 * @method string getOutId()
 * @method string getByeTtsParams()
 */
class IvrCallRequest extends \RpcAcsRequest
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
            'IvrCall',
            'dyvmsapi'
        );
    }

    /**
     * @param string $byeCode
     *
     * @return $this
     */
    public function setByeCode($byeCode)
    {
        $this->requestParameters['ByeCode'] = $byeCode;
        $this->queryParameters['ByeCode'] = $byeCode;

        return $this;
    }

    /**
     * @param array $menuKeyMaps
     *
     * @return $this
     */
    public function setMenuKeyMaps(array $menuKeyMaps)
    {
        $this->requestParameters['MenuKeyMaps'] = $menuKeyMaps;
        foreach ($menuKeyMaps as $i => $iValue) {
            $this->queryParameters['MenuKeyMap.' . ($i + 1) . '.Code'] = $menuKeyMaps[$i]['Code'];
            $this->queryParameters['MenuKeyMap.' . ($i + 1) . '.TtsParams'] = $menuKeyMaps[$i]['TtsParams'];
            $this->queryParameters['MenuKeyMap.' . ($i + 1) . '.Key'] = $menuKeyMaps[$i]['Key'];
        }

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
     * @param string $startTtsParams
     *
     * @return $this
     */
    public function setStartTtsParams($startTtsParams)
    {
        $this->requestParameters['StartTtsParams'] = $startTtsParams;
        $this->queryParameters['StartTtsParams'] = $startTtsParams;

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
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->requestParameters['Timeout'] = $timeout;
        $this->queryParameters['Timeout'] = $timeout;

        return $this;
    }

    /**
     * @param string $startCode
     *
     * @return $this
     */
    public function setStartCode($startCode)
    {
        $this->requestParameters['StartCode'] = $startCode;
        $this->queryParameters['StartCode'] = $startCode;

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
     * @param string $byeTtsParams
     *
     * @return $this
     */
    public function setByeTtsParams($byeTtsParams)
    {
        $this->requestParameters['ByeTtsParams'] = $byeTtsParams;
        $this->queryParameters['ByeTtsParams'] = $byeTtsParams;

        return $this;
    }
}
