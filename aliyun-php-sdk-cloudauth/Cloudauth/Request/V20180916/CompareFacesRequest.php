<?php

namespace Cloudauth\Request\V20180916;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CompareFaces
 *
 * @method string getSourceImageType()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getTargetImageType()
 * @method string getSourceImageValue()
 * @method string getTargetImageValue()
 */
class CompareFacesRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Cloudauth',
            '2018-09-16',
            'CompareFaces',
            'cloudauth'
        );
    }

    /**
     * @param string $sourceImageType
     *
     * @return $this
     */
    public function setSourceImageType($sourceImageType)
    {
        $this->requestParameters['SourceImageType'] = $sourceImageType;
        $this->queryParameters['SourceImageType'] = $sourceImageType;

        return $this;
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
     * @param string $targetImageType
     *
     * @return $this
     */
    public function setTargetImageType($targetImageType)
    {
        $this->requestParameters['TargetImageType'] = $targetImageType;
        $this->queryParameters['TargetImageType'] = $targetImageType;

        return $this;
    }

    /**
     * @param string $sourceImageValue
     *
     * @return $this
     */
    public function setSourceImageValue($sourceImageValue)
    {
        $this->requestParameters['SourceImageValue'] = $sourceImageValue;
        $this->queryParameters['SourceImageValue'] = $sourceImageValue;

        return $this;
    }

    /**
     * @param string $targetImageValue
     *
     * @return $this
     */
    public function setTargetImageValue($targetImageValue)
    {
        $this->requestParameters['TargetImageValue'] = $targetImageValue;
        $this->queryParameters['TargetImageValue'] = $targetImageValue;

        return $this;
    }
}
