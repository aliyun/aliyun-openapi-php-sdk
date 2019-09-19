<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCADConversionTask
 *
 * @method string getSrcType()
 * @method string getBaseRow()
 * @method string getProject()
 * @method string getZoomFactor()
 * @method string getNotifyEndpoint()
 * @method string getBaseCol()
 * @method string getNotifyTopicName()
 * @method string getUnitWidth()
 * @method string getZoomLevel()
 * @method string getModelId()
 * @method string getTgtType()
 * @method string getUnitHeight()
 * @method string getSrcUri()
 * @method string getThumbnails()
 * @method string getTgtUri()
 */
class CreateCADConversionTaskRequest extends \RpcAcsRequest
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
            'CreateCADConversionTask',
            'imm'
        );
    }

    /**
     * @param string $srcType
     *
     * @return $this
     */
    public function setSrcType($srcType)
    {
        $this->requestParameters['SrcType'] = $srcType;
        $this->queryParameters['SrcType'] = $srcType;

        return $this;
    }

    /**
     * @param string $baseRow
     *
     * @return $this
     */
    public function setBaseRow($baseRow)
    {
        $this->requestParameters['BaseRow'] = $baseRow;
        $this->queryParameters['BaseRow'] = $baseRow;

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
     * @param string $zoomFactor
     *
     * @return $this
     */
    public function setZoomFactor($zoomFactor)
    {
        $this->requestParameters['ZoomFactor'] = $zoomFactor;
        $this->queryParameters['ZoomFactor'] = $zoomFactor;

        return $this;
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function setNotifyEndpoint($notifyEndpoint)
    {
        $this->requestParameters['NotifyEndpoint'] = $notifyEndpoint;
        $this->queryParameters['NotifyEndpoint'] = $notifyEndpoint;

        return $this;
    }

    /**
     * @param string $baseCol
     *
     * @return $this
     */
    public function setBaseCol($baseCol)
    {
        $this->requestParameters['BaseCol'] = $baseCol;
        $this->queryParameters['BaseCol'] = $baseCol;

        return $this;
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function setNotifyTopicName($notifyTopicName)
    {
        $this->requestParameters['NotifyTopicName'] = $notifyTopicName;
        $this->queryParameters['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @param string $unitWidth
     *
     * @return $this
     */
    public function setUnitWidth($unitWidth)
    {
        $this->requestParameters['UnitWidth'] = $unitWidth;
        $this->queryParameters['UnitWidth'] = $unitWidth;

        return $this;
    }

    /**
     * @param string $zoomLevel
     *
     * @return $this
     */
    public function setZoomLevel($zoomLevel)
    {
        $this->requestParameters['ZoomLevel'] = $zoomLevel;
        $this->queryParameters['ZoomLevel'] = $zoomLevel;

        return $this;
    }

    /**
     * @param string $modelId
     *
     * @return $this
     */
    public function setModelId($modelId)
    {
        $this->requestParameters['ModelId'] = $modelId;
        $this->queryParameters['ModelId'] = $modelId;

        return $this;
    }

    /**
     * @param string $tgtType
     *
     * @return $this
     */
    public function setTgtType($tgtType)
    {
        $this->requestParameters['TgtType'] = $tgtType;
        $this->queryParameters['TgtType'] = $tgtType;

        return $this;
    }

    /**
     * @param string $unitHeight
     *
     * @return $this
     */
    public function setUnitHeight($unitHeight)
    {
        $this->requestParameters['UnitHeight'] = $unitHeight;
        $this->queryParameters['UnitHeight'] = $unitHeight;

        return $this;
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        $this->requestParameters['SrcUri'] = $srcUri;
        $this->queryParameters['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $thumbnails
     *
     * @return $this
     */
    public function setThumbnails($thumbnails)
    {
        $this->requestParameters['Thumbnails'] = $thumbnails;
        $this->queryParameters['Thumbnails'] = $thumbnails;

        return $this;
    }

    /**
     * @param string $tgtUri
     *
     * @return $this
     */
    public function setTgtUri($tgtUri)
    {
        $this->requestParameters['TgtUri'] = $tgtUri;
        $this->queryParameters['TgtUri'] = $tgtUri;

        return $this;
    }
}
