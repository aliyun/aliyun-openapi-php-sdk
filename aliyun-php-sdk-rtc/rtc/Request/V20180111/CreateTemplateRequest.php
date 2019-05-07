<?php

namespace rtc\Request\V20180111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
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
     * @param array $liveConfig
     *
     * @return $this
     */
    public function setLiveConfigs(array $liveConfig)
    {
        $this->requestParameters['LiveConfigs'] = $liveConfig;
        foreach ($liveConfig as $depth1 => $depth1Value) {
            $this->queryParameters['LiveConfig.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
            $this->queryParameters['LiveConfig.' . ($depth1 + 1) . '.AppName'] = $depth1Value['AppName'];
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
     * @param array $recordConfig
     *
     * @return $this
     */
    public function setRecordConfigs(array $recordConfig)
    {
        $this->requestParameters['RecordConfigs'] = $recordConfig;
        foreach ($recordConfig as $depth1 => $depth1Value) {
            $this->queryParameters['RecordConfig.' . ($depth1 + 1) . '.StorageType'] = $depth1Value['StorageType'];
            $this->queryParameters['RecordConfig.' . ($depth1 + 1) . '.FileFormat'] = $depth1Value['FileFormat'];
            $this->queryParameters['RecordConfig.' . ($depth1 + 1) . '.OssEndPoint'] = $depth1Value['OssEndPoint'];
            $this->queryParameters['RecordConfig.' . ($depth1 + 1) . '.OssBucket'] = $depth1Value['OssBucket'];
            $this->queryParameters['RecordConfig.' . ($depth1 + 1) . '.VodTransCodeGroupId'] = $depth1Value['VodTransCodeGroupId'];
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
     * @param array $layOut
     *
     * @return $this
     */
    public function setLayOuts(array $layOut)
    {
        $this->requestParameters['LayOuts'] = $layOut;
        foreach ($layOut as $depth1 => $depth1Value) {
            $this->queryParameters['LayOut.' . ($depth1 + 1) . '.Color'] = $depth1Value['Color'];
            $this->queryParameters['LayOut.' . ($depth1 + 1) . '.CutMode'] = $depth1Value['CutMode'];
            $this->queryParameters['LayOut.' . ($depth1 + 1) . '.LayOutId'] = $depth1Value['LayOutId'];
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
