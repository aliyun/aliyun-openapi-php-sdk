<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateOssStockStatus
 *
 * @method string getResourceTypeList()
 * @method string getVideoFrameInterval()
 * @method string getStartDate()
 * @method string getSourceIp()
 * @method string getVideoAutoFreezeSceneList()
 * @method string getLang()
 * @method string getImageAutoFreeze()
 * @method string getVideoMaxSize()
 * @method string getAutoFreezeType()
 * @method string getEndDate()
 * @method string getBucketConfigList()
 * @method string getSceneList()
 * @method string getVideoMaxFrames()
 * @method string getOperation()
 */
class UpdateOssStockStatusRequest extends \RpcAcsRequest
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
            'UpdateOssStockStatus',
            'green'
        );
    }

    /**
     * @param string $resourceTypeList
     *
     * @return $this
     */
    public function setResourceTypeList($resourceTypeList)
    {
        $this->requestParameters['ResourceTypeList'] = $resourceTypeList;
        $this->queryParameters['ResourceTypeList'] = $resourceTypeList;

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
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->requestParameters['StartDate'] = $startDate;
        $this->queryParameters['StartDate'] = $startDate;

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
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->requestParameters['EndDate'] = $endDate;
        $this->queryParameters['EndDate'] = $endDate;

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
     * @param string $sceneList
     *
     * @return $this
     */
    public function setSceneList($sceneList)
    {
        $this->requestParameters['SceneList'] = $sceneList;
        $this->queryParameters['SceneList'] = $sceneList;

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

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->requestParameters['Operation'] = $operation;
        $this->queryParameters['Operation'] = $operation;

        return $this;
    }
}
