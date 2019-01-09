<?php

namespace imm\Request\V20170906;

/**
 * Request of FindImages
 *
 * @method string getGender()
 * @method string getRemarksAPrefix()
 * @method string getProject()
 * @method string getOrderBy()
 * @method string getImageSizeRange()
 * @method string getRemarksBPrefix()
 * @method string getTagNames()
 * @method string getSourceUriPrefix()
 * @method string getLocationBoundary()
 * @method string getEmotion()
 * @method string getImageTimeRange()
 * @method string getMarker()
 * @method string getOCRContentsMatch()
 * @method string getCreateTimeRange()
 * @method string getSetId()
 * @method string getSourceType()
 * @method string getUpdateTimeRange()
 * @method string getAgeRange()
 * @method string getOrder()
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
     * @param string $updateTimeRange
     *
     * @return $this
     */
    public function setUpdateTimeRange($updateTimeRange)
    {
        $this->requestParameters['UpdateTimeRange'] = $updateTimeRange;
        $this->queryParameters['UpdateTimeRange'] = $updateTimeRange;

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
}
