<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of FindSimilarFaces
 *
 * @method string getProject()
 * @method string getMinSimilarity()
 * @method string getResponseFormat()
 * @method string getLimit()
 * @method string getFaceId()
 * @method string getImageUri()
 * @method string getSetId()
 */
class FindSimilarFacesRequest extends \RpcAcsRequest
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
            'FindSimilarFaces',
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
     * @param string $minSimilarity
     *
     * @return $this
     */
    public function setMinSimilarity($minSimilarity)
    {
        $this->requestParameters['MinSimilarity'] = $minSimilarity;
        $this->queryParameters['MinSimilarity'] = $minSimilarity;

        return $this;
    }

    /**
     * @param string $responseFormat
     *
     * @return $this
     */
    public function setResponseFormat($responseFormat)
    {
        $this->requestParameters['ResponseFormat'] = $responseFormat;
        $this->queryParameters['ResponseFormat'] = $responseFormat;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

        return $this;
    }

    /**
     * @param string $faceId
     *
     * @return $this
     */
    public function setFaceId($faceId)
    {
        $this->requestParameters['FaceId'] = $faceId;
        $this->queryParameters['FaceId'] = $faceId;

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
