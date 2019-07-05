<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UploadImageToLib
 *
 * @method string getImages()
 * @method string getSourceIp()
 * @method string getImageLibId()
 */
class UploadImageToLibRequest extends \RpcAcsRequest
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
            'UploadImageToLib',
            'green'
        );
    }

    /**
     * @param string $images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->requestParameters['Images'] = $images;
        $this->queryParameters['Images'] = $images;

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
     * @param string $imageLibId
     *
     * @return $this
     */
    public function setImageLibId($imageLibId)
    {
        $this->requestParameters['ImageLibId'] = $imageLibId;
        $this->queryParameters['ImageLibId'] = $imageLibId;

        return $this;
    }
}
