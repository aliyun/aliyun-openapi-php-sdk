<?php

namespace Cloudauth\Request\V20180916;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DetectFaceAttributes
 *
 * @method string getMaxNumPhotosPerCategory()
 * @method string getMaxFaceNum()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getRetAttributes()
 * @method string getMaterialValue()
 * @method string getDontSaveDB()
 * @method string getClientTag()
 */
class DetectFaceAttributesRequest extends \RpcAcsRequest
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
            'DetectFaceAttributes',
            'cloudauth'
        );
    }

    /**
     * @param string $maxNumPhotosPerCategory
     *
     * @return $this
     */
    public function setMaxNumPhotosPerCategory($maxNumPhotosPerCategory)
    {
        $this->requestParameters['MaxNumPhotosPerCategory'] = $maxNumPhotosPerCategory;
        $this->queryParameters['MaxNumPhotosPerCategory'] = $maxNumPhotosPerCategory;

        return $this;
    }

    /**
     * @param string $maxFaceNum
     *
     * @return $this
     */
    public function setMaxFaceNum($maxFaceNum)
    {
        $this->requestParameters['MaxFaceNum'] = $maxFaceNum;
        $this->queryParameters['MaxFaceNum'] = $maxFaceNum;

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
     * @param string $retAttributes
     *
     * @return $this
     */
    public function setRetAttributes($retAttributes)
    {
        $this->requestParameters['RetAttributes'] = $retAttributes;
        $this->queryParameters['RetAttributes'] = $retAttributes;

        return $this;
    }

    /**
     * @param string $materialValue
     *
     * @return $this
     */
    public function setMaterialValue($materialValue)
    {
        $this->requestParameters['MaterialValue'] = $materialValue;
        $this->queryParameters['MaterialValue'] = $materialValue;

        return $this;
    }

    /**
     * @param string $dontSaveDB
     *
     * @return $this
     */
    public function setDontSaveDB($dontSaveDB)
    {
        $this->requestParameters['DontSaveDB'] = $dontSaveDB;
        $this->queryParameters['DontSaveDB'] = $dontSaveDB;

        return $this;
    }

    /**
     * @param string $clientTag
     *
     * @return $this
     */
    public function setClientTag($clientTag)
    {
        $this->requestParameters['ClientTag'] = $clientTag;
        $this->queryParameters['ClientTag'] = $clientTag;

        return $this;
    }
}
