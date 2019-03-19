<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetUpgradeImgByModel
 *
 * @method string getImgAddr()
 * @method string getImgVersion()
 * @method string getApModelId()
 * @method string getComment()
 */
class SetUpgradeImgByModelRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'SetUpgradeImgByModel',
            'cloudwf'
        );
    }

    /**
     * @param string $imgAddr
     *
     * @return $this
     */
    public function setImgAddr($imgAddr)
    {
        $this->requestParameters['ImgAddr'] = $imgAddr;
        $this->queryParameters['ImgAddr'] = $imgAddr;

        return $this;
    }

    /**
     * @param string $imgVersion
     *
     * @return $this
     */
    public function setImgVersion($imgVersion)
    {
        $this->requestParameters['ImgVersion'] = $imgVersion;
        $this->queryParameters['ImgVersion'] = $imgVersion;

        return $this;
    }

    /**
     * @param string $apModelId
     *
     * @return $this
     */
    public function setApModelId($apModelId)
    {
        $this->requestParameters['ApModelId'] = $apModelId;
        $this->queryParameters['ApModelId'] = $apModelId;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

        return $this;
    }
}
