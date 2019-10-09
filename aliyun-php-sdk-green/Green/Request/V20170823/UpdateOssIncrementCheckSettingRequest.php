<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateOssIncrementCheckSetting
 *
 * @method string getVideoSceneList()
 * @method string getImageSceneList()
 * @method string getVideoFrameInterval()
 * @method string getSourceIp()
 * @method string getImageScanLimit()
 * @method string getVideoAutoFreezeSceneList()
 * @method string getLang()
 * @method string getImageAutoFreeze()
 * @method string getVideoMaxSize()
 * @method string getAutoFreezeType()
 * @method string getBucketConfigList()
 * @method string getVideoMaxFrames()
 */
class UpdateOssIncrementCheckSettingRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'UpdateOssIncrementCheckSetting',
            'green'
        );
    }

    /**
     * @param string $videoSceneList
     *
     * @return $this
     */
    public function setVideoSceneList($videoSceneList)
    {
        $this->requestParameters['VideoSceneList'] = $videoSceneList;
        $this->queryParameters['VideoSceneList'] = $videoSceneList;

        return $this;
    }

    /**
     * @param string $imageSceneList
     *
     * @return $this
     */
    public function setImageSceneList($imageSceneList)
    {
        $this->requestParameters['ImageSceneList'] = $imageSceneList;
        $this->queryParameters['ImageSceneList'] = $imageSceneList;

        return $this;
    }

    /**
     * @param string $videoFrameInterval
     *
     * @return $this
     */
    public function setVideoFrameInterval($videoFrameInterval)
    {
        $this->requestParameters['VideoFrameInterval'] = $videoFrameInterval;
        $this->queryParameters['VideoFrameInterval'] = $videoFrameInterval;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $imageScanLimit
     *
     * @return $this
     */
    public function setImageScanLimit($imageScanLimit)
    {
        $this->requestParameters['ImageScanLimit'] = $imageScanLimit;
        $this->queryParameters['ImageScanLimit'] = $imageScanLimit;

        return $this;
    }

    /**
     * @param string $videoAutoFreezeSceneList
     *
     * @return $this
     */
    public function setVideoAutoFreezeSceneList($videoAutoFreezeSceneList)
    {
        $this->requestParameters['VideoAutoFreezeSceneList'] = $videoAutoFreezeSceneList;
        $this->queryParameters['VideoAutoFreezeSceneList'] = $videoAutoFreezeSceneList;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $imageAutoFreeze
     *
     * @return $this
     */
    public function setImageAutoFreeze($imageAutoFreeze)
    {
        $this->requestParameters['ImageAutoFreeze'] = $imageAutoFreeze;
        $this->queryParameters['ImageAutoFreeze'] = $imageAutoFreeze;

        return $this;
    }

    /**
     * @param string $videoMaxSize
     *
     * @return $this
     */
    public function setVideoMaxSize($videoMaxSize)
    {
        $this->requestParameters['VideoMaxSize'] = $videoMaxSize;
        $this->queryParameters['VideoMaxSize'] = $videoMaxSize;

        return $this;
    }

    /**
     * @param string $autoFreezeType
     *
     * @return $this
     */
    public function setAutoFreezeType($autoFreezeType)
    {
        $this->requestParameters['AutoFreezeType'] = $autoFreezeType;
        $this->queryParameters['AutoFreezeType'] = $autoFreezeType;

        return $this;
    }

    /**
     * @param string $bucketConfigList
     *
     * @return $this
     */
    public function setBucketConfigList($bucketConfigList)
    {
        $this->requestParameters['BucketConfigList'] = $bucketConfigList;
        $this->queryParameters['BucketConfigList'] = $bucketConfigList;

        return $this;
    }

    /**
     * @param string $videoMaxFrames
     *
     * @return $this
     */
    public function setVideoMaxFrames($videoMaxFrames)
    {
        $this->requestParameters['VideoMaxFrames'] = $videoMaxFrames;
        $this->queryParameters['VideoMaxFrames'] = $videoMaxFrames;

        return $this;
    }
}
