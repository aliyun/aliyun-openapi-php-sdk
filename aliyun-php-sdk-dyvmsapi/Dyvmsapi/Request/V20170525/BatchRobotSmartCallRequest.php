<?php

namespace Dyvmsapi\Request\V20170525;

/**
 * Request of BatchRobotSmartCall
 *
 * @method string getResourceOwnerId()
 * @method string getEarlyMediaAsr()
 * @method string getResourceOwnerAccount()
 * @method string getTtsParamHead()
 * @method string getTaskName()
 * @method string getTtsParam()
 * @method string getOwnerId()
 * @method string getDialogId()
 * @method string getCalledNumber()
 * @method string getScheduleTime()
 * @method string getCalledShowNumber()
 * @method string getCorpName()
 * @method string getScheduleCall()
 */
class BatchRobotSmartCallRequest extends \RpcAcsRequest
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
            'BatchRobotSmartCall',
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
     * @param string $earlyMediaAsr
     *
     * @return $this
     */
    public function setEarlyMediaAsr($earlyMediaAsr)
    {
        $this->requestParameters['EarlyMediaAsr'] = $earlyMediaAsr;
        $this->queryParameters['EarlyMediaAsr'] = $earlyMediaAsr;

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
     * @param string $ttsParamHead
     *
     * @return $this
     */
    public function setTtsParamHead($ttsParamHead)
    {
        $this->requestParameters['TtsParamHead'] = $ttsParamHead;
        $this->queryParameters['TtsParamHead'] = $ttsParamHead;

        return $this;
    }

    /**
     * @param string $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->requestParameters['TaskName'] = $taskName;
        $this->queryParameters['TaskName'] = $taskName;

        return $this;
    }

    /**
     * @param string $ttsParam
     *
     * @return $this
     */
    public function setTtsParam($ttsParam)
    {
        $this->requestParameters['TtsParam'] = $ttsParam;
        $this->queryParameters['TtsParam'] = $ttsParam;

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
     * @param string $dialogId
     *
     * @return $this
     */
    public function setDialogId($dialogId)
    {
        $this->requestParameters['DialogId'] = $dialogId;
        $this->queryParameters['DialogId'] = $dialogId;

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
     * @param string $scheduleTime
     *
     * @return $this
     */
    public function setScheduleTime($scheduleTime)
    {
        $this->requestParameters['ScheduleTime'] = $scheduleTime;
        $this->queryParameters['ScheduleTime'] = $scheduleTime;

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
     * @param string $corpName
     *
     * @return $this
     */
    public function setCorpName($corpName)
    {
        $this->requestParameters['CorpName'] = $corpName;
        $this->queryParameters['CorpName'] = $corpName;

        return $this;
    }

    /**
     * @param string $scheduleCall
     *
     * @return $this
     */
    public function setScheduleCall($scheduleCall)
    {
        $this->requestParameters['ScheduleCall'] = $scheduleCall;
        $this->queryParameters['ScheduleCall'] = $scheduleCall;

        return $this;
    }
}
