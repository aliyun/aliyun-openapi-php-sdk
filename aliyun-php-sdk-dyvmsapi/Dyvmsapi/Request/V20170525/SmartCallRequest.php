<?php

namespace Dyvmsapi\Request\V20170525;

/**
 * Request of SmartCall
 *
 * @method string getResourceOwnerId()
 * @method string getVoiceCodeParam()
 * @method string getEarlyMediaAsr()
 * @method string getSpeed()
 * @method string getSessionTimeout()
 * @method string getDynamicId()
 * @method string getCalledNumber()
 * @method string getTtsSpeed()
 * @method string getVoiceCode()
 * @method string getCalledShowNumber()
 * @method string getActionCodeTimeBreak()
 * @method string getTtsConf()
 * @method string getActionCodeBreak()
 * @method string getResourceOwnerAccount()
 * @method string getRecordFlag()
 * @method string getOwnerId()
 * @method string getTtsVolume()
 * @method string getVolume()
 * @method string getMuteTime()
 * @method string getOutId()
 * @method string getAsrModelId()
 * @method string getPauseTime()
 * @method string getTtsStyle()
 */
class SmartCallRequest extends \RpcAcsRequest
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
            'SmartCall',
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
     * @param string $voiceCodeParam
     *
     * @return $this
     */
    public function setVoiceCodeParam($voiceCodeParam)
    {
        $this->requestParameters['VoiceCodeParam'] = $voiceCodeParam;
        $this->queryParameters['VoiceCodeParam'] = $voiceCodeParam;

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
     * @param string $dynamicId
     *
     * @return $this
     */
    public function setDynamicId($dynamicId)
    {
        $this->requestParameters['DynamicId'] = $dynamicId;
        $this->queryParameters['DynamicId'] = $dynamicId;

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
     * @param string $ttsSpeed
     *
     * @return $this
     */
    public function setTtsSpeed($ttsSpeed)
    {
        $this->requestParameters['TtsSpeed'] = $ttsSpeed;
        $this->queryParameters['TtsSpeed'] = $ttsSpeed;

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
     * @param string $actionCodeTimeBreak
     *
     * @return $this
     */
    public function setActionCodeTimeBreak($actionCodeTimeBreak)
    {
        $this->requestParameters['ActionCodeTimeBreak'] = $actionCodeTimeBreak;
        $this->queryParameters['ActionCodeTimeBreak'] = $actionCodeTimeBreak;

        return $this;
    }

    /**
     * @param string $ttsConf
     *
     * @return $this
     */
    public function setTtsConf($ttsConf)
    {
        $this->requestParameters['TtsConf'] = $ttsConf;
        $this->queryParameters['TtsConf'] = $ttsConf;

        return $this;
    }

    /**
     * @param string $actionCodeBreak
     *
     * @return $this
     */
    public function setActionCodeBreak($actionCodeBreak)
    {
        $this->requestParameters['ActionCodeBreak'] = $actionCodeBreak;
        $this->queryParameters['ActionCodeBreak'] = $actionCodeBreak;

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
     * @param string $ttsVolume
     *
     * @return $this
     */
    public function setTtsVolume($ttsVolume)
    {
        $this->requestParameters['TtsVolume'] = $ttsVolume;
        $this->queryParameters['TtsVolume'] = $ttsVolume;

        return $this;
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
     * @param string $muteTime
     *
     * @return $this
     */
    public function setMuteTime($muteTime)
    {
        $this->requestParameters['MuteTime'] = $muteTime;
        $this->queryParameters['MuteTime'] = $muteTime;

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
     * @param string $pauseTime
     *
     * @return $this
     */
    public function setPauseTime($pauseTime)
    {
        $this->requestParameters['PauseTime'] = $pauseTime;
        $this->queryParameters['PauseTime'] = $pauseTime;

        return $this;
    }

    /**
     * @param string $ttsStyle
     *
     * @return $this
     */
    public function setTtsStyle($ttsStyle)
    {
        $this->requestParameters['TtsStyle'] = $ttsStyle;
        $this->queryParameters['TtsStyle'] = $ttsStyle;

        return $this;
    }
}
