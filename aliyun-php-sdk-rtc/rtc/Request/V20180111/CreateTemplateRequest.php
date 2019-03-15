<?php

namespace rtc\Request\V20180111;

/**
 * Request of CreateTemplate
 *
 * @method string getServiceMode()
 * @method array getLiveConfigs()
 * @method string getMediaConfig()
 * @method string getMaxMixStreamCount()
 * @method array getRecordConfigs()
 * @method string getOwnerId()
 * @method array getLayOuts()
 * @method string getAppId()
 * @method string getCallBack()
 * @method string getMixMode()
 */
class CreateTemplateRequest extends \RpcAcsRequest
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
            'rtc',
            '2018-01-11',
            'CreateTemplate',
            'rtc'
        );
    }

    /**
     * @param string $serviceMode
     *
     * @return $this
     */
    public function setServiceMode($serviceMode)
    {
        $this->requestParameters['ServiceMode'] = $serviceMode;
        $this->queryParameters['ServiceMode'] = $serviceMode;

        return $this;
    }

    /**
     * @param array $liveConfigs
     *
     * @return $this
     */
    public function setLiveConfigs(array $liveConfigs)
    {
        $this->requestParameters['LiveConfigs'] = $liveConfigs;
        foreach ($liveConfigs as $i => $iValue) {
            $this->queryParameters['LiveConfig.' . ($i + 1) . '.DomainName'] = $liveConfigs[$i]['DomainName'];
            $this->queryParameters['LiveConfig.' . ($i + 1) . '.AppName'] = $liveConfigs[$i]['AppName'];
        }

        return $this;
    }

    /**
     * @param string $mediaConfig
     *
     * @return $this
     */
    public function setMediaConfig($mediaConfig)
    {
        $this->requestParameters['MediaConfig'] = $mediaConfig;
        $this->queryParameters['MediaConfig'] = $mediaConfig;

        return $this;
    }

    /**
     * @param string $maxMixStreamCount
     *
     * @return $this
     */
    public function setMaxMixStreamCount($maxMixStreamCount)
    {
        $this->requestParameters['MaxMixStreamCount'] = $maxMixStreamCount;
        $this->queryParameters['MaxMixStreamCount'] = $maxMixStreamCount;

        return $this;
    }

    /**
     * @param array $recordConfigs
     *
     * @return $this
     */
    public function setRecordConfigs(array $recordConfigs)
    {
        $this->requestParameters['RecordConfigs'] = $recordConfigs;
        foreach ($recordConfigs as $i => $iValue) {
            $this->queryParameters['RecordConfig.' . ($i + 1) . '.StorageType'] = $recordConfigs[$i]['StorageType'];
            $this->queryParameters['RecordConfig.' . ($i + 1) . '.FileFormat'] = $recordConfigs[$i]['FileFormat'];
            $this->queryParameters['RecordConfig.' . ($i + 1) . '.OssEndPoint'] = $recordConfigs[$i]['OssEndPoint'];
            $this->queryParameters['RecordConfig.' . ($i + 1) . '.OssBucket'] = $recordConfigs[$i]['OssBucket'];
            $this->queryParameters['RecordConfig.' . ($i + 1) . '.VodTransCodeGroupId'] = $recordConfigs[$i]['VodTransCodeGroupId'];
        }

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
     * @param array $layOuts
     *
     * @return $this
     */
    public function setLayOuts(array $layOuts)
    {
        $this->requestParameters['LayOuts'] = $layOuts;
        foreach ($layOuts as $i => $iValue) {
            $this->queryParameters['LayOut.' . ($i + 1) . '.Color'] = $layOuts[$i]['Color'];
            $this->queryParameters['LayOut.' . ($i + 1) . '.CutMode'] = $layOuts[$i]['CutMode'];
            $this->queryParameters['LayOut.' . ($i + 1) . '.LayOutId'] = $layOuts[$i]['LayOutId'];
        }

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $callBack
     *
     * @return $this
     */
    public function setCallBack($callBack)
    {
        $this->requestParameters['CallBack'] = $callBack;
        $this->queryParameters['CallBack'] = $callBack;

        return $this;
    }

    /**
     * @param string $mixMode
     *
     * @return $this
     */
    public function setMixMode($mixMode)
    {
        $this->requestParameters['MixMode'] = $mixMode;
        $this->queryParameters['MixMode'] = $mixMode;

        return $this;
    }
}
