<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CopyCasterSceneConfig
 *
 * @method string getFromSceneId()
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getToSceneId()
 */
class CopyCasterSceneConfigRequest extends \RpcAcsRequest
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
            'CopyCasterSceneConfig',
            'live'
        );
    }

    /**
     * @param string $fromSceneId
     *
     * @return $this
     */
    public function setFromSceneId($fromSceneId)
    {
        $this->requestParameters['FromSceneId'] = $fromSceneId;
        $this->queryParameters['FromSceneId'] = $fromSceneId;

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
     * @param string $toSceneId
     *
     * @return $this
     */
    public function setToSceneId($toSceneId)
    {
        $this->requestParameters['ToSceneId'] = $toSceneId;
        $this->queryParameters['ToSceneId'] = $toSceneId;

        return $this;
    }
}
