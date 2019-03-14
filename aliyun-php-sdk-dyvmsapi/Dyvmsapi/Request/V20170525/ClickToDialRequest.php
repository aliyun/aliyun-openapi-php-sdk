<?php

namespace Dyvmsapi\Request\V20170525;

/**
 * Request of ClickToDial
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getRecordFlag()
 * @method string getOwnerId()
 * @method string getCallerShowNumber()
 * @method string getSessionTimeout()
 * @method string getCalledNumber()
 * @method string getCalledShowNumber()
 * @method string getOutId()
 * @method string getAsrFlag()
 * @method string getAsrModelId()
 * @method string getCallerNumber()
 */
class ClickToDialRequest extends \RpcAcsRequest
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
            'ClickToDial',
            'dyvmsapi'
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
     * @param string $recordFlag
     *
     * @return $this
     */
    public function setRecordFlag($recordFlag)
    {
        $this->requestParameters['RecordFlag'] = $recordFlag;
        $this->queryParameters['RecordFlag'] = $recordFlag;

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
     * @param string $callerShowNumber
     *
     * @return $this
     */
    public function setCallerShowNumber($callerShowNumber)
    {
        $this->requestParameters['CallerShowNumber'] = $callerShowNumber;
        $this->queryParameters['CallerShowNumber'] = $callerShowNumber;

        return $this;
    }

    /**
     * @param string $sessionTimeout
     *
     * @return $this
     */
    public function setSessionTimeout($sessionTimeout)
    {
        $this->requestParameters['SessionTimeout'] = $sessionTimeout;
        $this->queryParameters['SessionTimeout'] = $sessionTimeout;

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
     * @param string $asrFlag
     *
     * @return $this
     */
    public function setAsrFlag($asrFlag)
    {
        $this->requestParameters['AsrFlag'] = $asrFlag;
        $this->queryParameters['AsrFlag'] = $asrFlag;

        return $this;
    }

    /**
     * @param string $asrModelId
     *
     * @return $this
     */
    public function setAsrModelId($asrModelId)
    {
        $this->requestParameters['AsrModelId'] = $asrModelId;
        $this->queryParameters['AsrModelId'] = $asrModelId;

        return $this;
    }

    /**
     * @param string $callerNumber
     *
     * @return $this
     */
    public function setCallerNumber($callerNumber)
    {
        $this->requestParameters['CallerNumber'] = $callerNumber;
        $this->queryParameters['CallerNumber'] = $callerNumber;

        return $this;
    }
}
