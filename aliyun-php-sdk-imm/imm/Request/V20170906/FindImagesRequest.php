<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of FindImages
 *
 * @method string getGender()
 * @method string getProject()
 * @method string getExternalId()
 * @method string getImageSizeRange()
 * @method string getRemarksBPrefix()
 * @method string getLocationBoundary()
 * @method string getImageTimeRange()
 * @method string getOCRContentsMatch()
 * @method string getLimit()
 * @method string getRemarksDPrefix()
 * @method string getSourceType()
 * @method string getAgeRange()
 * @method string getOrder()
 * @method string getRemarksAPrefix()
 * @method string getGroupId()
 * @method string getOrderBy()
 * @method string getTagNames()
 * @method string getSourceUriPrefix()
 * @method string getEmotion()
 * @method string getMarker()
 * @method string getRemarksCPrefix()
 * @method string getCreateTimeRange()
 * @method string getSetId()
 * @method string getModifyTimeRange()
 */
class FindImagesRequest extends \RpcAcsRequest
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
            'FindImages',
            'imm'
        );
    }

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->requestParameters['Gender'] = $gender;
        $this->queryParameters['Gender'] = $gender;

        return $this;
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
     * @param string $imageSizeRange
     *
     * @return $this
     */
    public function setImageSizeRange($imageSizeRange)
    {
        $this->requestParameters['ImageSizeRange'] = $imageSizeRange;
        $this->queryParameters['ImageSizeRange'] = $imageSizeRange;

        return $this;
    }

    /**
     * @param string $remarksBPrefix
     *
     * @return $this
     */
    public function setRemarksBPrefix($remarksBPrefix)
    {
        $this->requestParameters['RemarksBPrefix'] = $remarksBPrefix;
        $this->queryParameters['RemarksBPrefix'] = $remarksBPrefix;

        return $this;
    }

    /**
     * @param string $locationBoundary
     *
     * @return $this
     */
    public function setLocationBoundary($locationBoundary)
    {
        $this->requestParameters['LocationBoundary'] = $locationBoundary;
        $this->queryParameters['LocationBoundary'] = $locationBoundary;

        return $this;
    }

    /**
     * @param string $imageTimeRange
     *
     * @return $this
     */
    public function setImageTimeRange($imageTimeRange)
    {
        $this->requestParameters['ImageTimeRange'] = $imageTimeRange;
        $this->queryParameters['ImageTimeRange'] = $imageTimeRange;

        return $this;
    }

    /**
     * @param string $oCRContentsMatch
     *
     * @return $this
     */
    public function setOCRContentsMatch($oCRContentsMatch)
    {
        $this->requestParameters['OCRContentsMatch'] = $oCRContentsMatch;
        $this->queryParameters['OCRContentsMatch'] = $oCRContentsMatch;

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
     * @param string $remarksDPrefix
     *
     * @return $this
     */
    public function setRemarksDPrefix($remarksDPrefix)
    {
        $this->requestParameters['RemarksDPrefix'] = $remarksDPrefix;
        $this->queryParameters['RemarksDPrefix'] = $remarksDPrefix;

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
     * @param string $ageRange
     *
     * @return $this
     */
    public function setAgeRange($ageRange)
    {
        $this->requestParameters['AgeRange'] = $ageRange;
        $this->queryParameters['AgeRange'] = $ageRange;

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->requestParameters['Order'] = $order;
        $this->queryParameters['Order'] = $order;

        return $this;
    }

    /**
     * @param string $remarksAPrefix
     *
     * @return $this
     */
    public function setRemarksAPrefix($remarksAPrefix)
    {
        $this->requestParameters['RemarksAPrefix'] = $remarksAPrefix;
        $this->queryParameters['RemarksAPrefix'] = $remarksAPrefix;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->requestParameters['OrderBy'] = $orderBy;
        $this->queryParameters['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @param string $tagNames
     *
     * @return $this
     */
    public function setTagNames($tagNames)
    {
        $this->requestParameters['TagNames'] = $tagNames;
        $this->queryParameters['TagNames'] = $tagNames;

        return $this;
    }

    /**
     * @param string $sourceUriPrefix
     *
     * @return $this
     */
    public function setSourceUriPrefix($sourceUriPrefix)
    {
        $this->requestParameters['SourceUriPrefix'] = $sourceUriPrefix;
        $this->queryParameters['SourceUriPrefix'] = $sourceUriPrefix;

        return $this;
    }

    /**
     * @param string $emotion
     *
     * @return $this
     */
    public function setEmotion($emotion)
    {
        $this->requestParameters['Emotion'] = $emotion;
        $this->queryParameters['Emotion'] = $emotion;

        return $this;
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->requestParameters['Marker'] = $marker;
        $this->queryParameters['Marker'] = $marker;

        return $this;
    }

    /**
     * @param string $remarksCPrefix
     *
     * @return $this
     */
    public function setRemarksCPrefix($remarksCPrefix)
    {
        $this->requestParameters['RemarksCPrefix'] = $remarksCPrefix;
        $this->queryParameters['RemarksCPrefix'] = $remarksCPrefix;

        return $this;
    }

    /**
     * @param string $createTimeRange
     *
     * @return $this
     */
    public function setCreateTimeRange($createTimeRange)
    {
        $this->requestParameters['CreateTimeRange'] = $createTimeRange;
        $this->queryParameters['CreateTimeRange'] = $createTimeRange;

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

    /**
     * @param string $modifyTimeRange
     *
     * @return $this
     */
    public function setModifyTimeRange($modifyTimeRange)
    {
        $this->requestParameters['ModifyTimeRange'] = $modifyTimeRange;
        $this->queryParameters['ModifyTimeRange'] = $modifyTimeRange;

        return $this;
    }
}
