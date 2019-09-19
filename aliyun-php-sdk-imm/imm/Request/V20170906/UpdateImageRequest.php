<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateImage
 *
 * @method string getProject()
 * @method string getExternalId()
 * @method string getSourceType()
 * @method string getRemarksB()
 * @method string getRemarksA()
 * @method string getImageUri()
 * @method string getSourceUri()
 * @method string getSourcePosition()
 * @method string getRemarksD()
 * @method string getRemarksC()
 * @method string getSetId()
 */
class UpdateImageRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'UpdateImage',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $externalId
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->requestParameters['ExternalId'] = $externalId;
        $this->queryParameters['ExternalId'] = $externalId;

        return $this;
    }

    /**
     * @param string $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->requestParameters['SourceType'] = $sourceType;
        $this->queryParameters['SourceType'] = $sourceType;

        return $this;
    }

    /**
     * @param string $remarksB
     *
     * @return $this
     */
    public function setRemarksB($remarksB)
    {
        $this->requestParameters['RemarksB'] = $remarksB;
        $this->queryParameters['RemarksB'] = $remarksB;

        return $this;
    }

    /**
     * @param string $remarksA
     *
     * @return $this
     */
    public function setRemarksA($remarksA)
    {
        $this->requestParameters['RemarksA'] = $remarksA;
        $this->queryParameters['RemarksA'] = $remarksA;

        return $this;
    }

    /**
     * @param string $imageUri
     *
     * @return $this
     */
    public function setImageUri($imageUri)
    {
        $this->requestParameters['ImageUri'] = $imageUri;
        $this->queryParameters['ImageUri'] = $imageUri;

        return $this;
    }

    /**
     * @param string $sourceUri
     *
     * @return $this
     */
    public function setSourceUri($sourceUri)
    {
        $this->requestParameters['SourceUri'] = $sourceUri;
        $this->queryParameters['SourceUri'] = $sourceUri;

        return $this;
    }

    /**
     * @param string $sourcePosition
     *
     * @return $this
     */
    public function setSourcePosition($sourcePosition)
    {
        $this->requestParameters['SourcePosition'] = $sourcePosition;
        $this->queryParameters['SourcePosition'] = $sourcePosition;

        return $this;
    }

    /**
     * @param string $remarksD
     *
     * @return $this
     */
    public function setRemarksD($remarksD)
    {
        $this->requestParameters['RemarksD'] = $remarksD;
        $this->queryParameters['RemarksD'] = $remarksD;

        return $this;
    }

    /**
     * @param string $remarksC
     *
     * @return $this
     */
    public function setRemarksC($remarksC)
    {
        $this->requestParameters['RemarksC'] = $remarksC;
        $this->queryParameters['RemarksC'] = $remarksC;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }
}
