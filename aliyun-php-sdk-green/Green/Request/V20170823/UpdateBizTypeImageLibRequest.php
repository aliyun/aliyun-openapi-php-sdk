<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateBizTypeImageLib
 *
 * @method string getScene()
 * @method string getSourceIp()
 * @method string getWhite()
 * @method string getReview()
 * @method string getBizTypeName()
 * @method string getBlack()
 * @method string getResourceType()
 */
class UpdateBizTypeImageLibRequest extends \RpcAcsRequest
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
            'UpdateBizTypeImageLib',
            'green'
        );
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->requestParameters['Scene'] = $scene;
        $this->queryParameters['Scene'] = $scene;

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
     * @param string $white
     *
     * @return $this
     */
    public function setWhite($white)
    {
        $this->requestParameters['White'] = $white;
        $this->queryParameters['White'] = $white;

        return $this;
    }

    /**
     * @param string $review
     *
     * @return $this
     */
    public function setReview($review)
    {
        $this->requestParameters['Review'] = $review;
        $this->queryParameters['Review'] = $review;

        return $this;
    }

    /**
     * @param string $bizTypeName
     *
     * @return $this
     */
    public function setBizTypeName($bizTypeName)
    {
        $this->requestParameters['BizTypeName'] = $bizTypeName;
        $this->queryParameters['BizTypeName'] = $bizTypeName;

        return $this;
    }

    /**
     * @param string $black
     *
     * @return $this
     */
    public function setBlack($black)
    {
        $this->requestParameters['Black'] = $black;
        $this->queryParameters['Black'] = $black;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }
}
