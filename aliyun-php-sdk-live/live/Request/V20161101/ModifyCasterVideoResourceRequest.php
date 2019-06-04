<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyCasterVideoResource
 *
 * @method string getResourceId()
 * @method string getVodUrl()
 * @method string getCasterId()
 * @method string getEndOffset()
 * @method string getOwnerId()
 * @method string getMaterialId()
 * @method string getBeginOffset()
 * @method string getLiveStreamUrl()
 * @method string getPtsCallbackInterval()
 * @method string getResourceName()
 * @method string getRepeatNum()
 */
class ModifyCasterVideoResourceRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'ModifyCasterVideoResource',
            'live'
        );
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param string $vodUrl
     *
     * @return $this
     */
    public function setVodUrl($vodUrl)
    {
        $this->requestParameters['VodUrl'] = $vodUrl;
        $this->queryParameters['VodUrl'] = $vodUrl;

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        $this->requestParameters['CasterId'] = $casterId;
        $this->queryParameters['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $endOffset
     *
     * @return $this
     */
    public function setEndOffset($endOffset)
    {
        $this->requestParameters['EndOffset'] = $endOffset;
        $this->queryParameters['EndOffset'] = $endOffset;

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
     * @param string $materialId
     *
     * @return $this
     */
    public function setMaterialId($materialId)
    {
        $this->requestParameters['MaterialId'] = $materialId;
        $this->queryParameters['MaterialId'] = $materialId;

        return $this;
    }

    /**
     * @param string $beginOffset
     *
     * @return $this
     */
    public function setBeginOffset($beginOffset)
    {
        $this->requestParameters['BeginOffset'] = $beginOffset;
        $this->queryParameters['BeginOffset'] = $beginOffset;

        return $this;
    }

    /**
     * @param string $liveStreamUrl
     *
     * @return $this
     */
    public function setLiveStreamUrl($liveStreamUrl)
    {
        $this->requestParameters['LiveStreamUrl'] = $liveStreamUrl;
        $this->queryParameters['LiveStreamUrl'] = $liveStreamUrl;

        return $this;
    }

    /**
     * @param string $ptsCallbackInterval
     *
     * @return $this
     */
    public function setPtsCallbackInterval($ptsCallbackInterval)
    {
        $this->requestParameters['PtsCallbackInterval'] = $ptsCallbackInterval;
        $this->queryParameters['PtsCallbackInterval'] = $ptsCallbackInterval;

        return $this;
    }

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->requestParameters['ResourceName'] = $resourceName;
        $this->queryParameters['ResourceName'] = $resourceName;

        return $this;
    }

    /**
     * @param string $repeatNum
     *
     * @return $this
     */
    public function setRepeatNum($repeatNum)
    {
        $this->requestParameters['RepeatNum'] = $repeatNum;
        $this->queryParameters['RepeatNum'] = $repeatNum;

        return $this;
    }
}
