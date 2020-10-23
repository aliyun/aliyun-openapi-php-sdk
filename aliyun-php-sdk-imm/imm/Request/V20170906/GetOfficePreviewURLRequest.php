<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetOfficePreviewURL
 *
 * @method string getSrcType()
 * @method string getProject()
 * @method string getWatermarkVertical()
 * @method string getWatermarkType()
 * @method string getWatermarkRotate()
 * @method string getWatermarkValue()
 * @method string getWatermarkFont()
 * @method string getWatermarkHorizontal()
 * @method string getSrcUri()
 * @method string getWatermarkFillStyle()
 */
class GetOfficePreviewURLRequest extends \RpcAcsRequest
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
            'GetOfficePreviewURL',
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
     * @param string $watermarkVertical
     *
     * @return $this
     */
    public function setWatermarkVertical($watermarkVertical)
    {
        $this->requestParameters['WatermarkVertical'] = $watermarkVertical;
        $this->queryParameters['WatermarkVertical'] = $watermarkVertical;

        return $this;
    }

    /**
     * @param string $watermarkType
     *
     * @return $this
     */
    public function setWatermarkType($watermarkType)
    {
        $this->requestParameters['WatermarkType'] = $watermarkType;
        $this->queryParameters['WatermarkType'] = $watermarkType;

        return $this;
    }

    /**
     * @param string $watermarkRotate
     *
     * @return $this
     */
    public function setWatermarkRotate($watermarkRotate)
    {
        $this->requestParameters['WatermarkRotate'] = $watermarkRotate;
        $this->queryParameters['WatermarkRotate'] = $watermarkRotate;

        return $this;
    }

    /**
     * @param string $watermarkValue
     *
     * @return $this
     */
    public function setWatermarkValue($watermarkValue)
    {
        $this->requestParameters['WatermarkValue'] = $watermarkValue;
        $this->queryParameters['WatermarkValue'] = $watermarkValue;

        return $this;
    }

    /**
     * @param string $watermarkFont
     *
     * @return $this
     */
    public function setWatermarkFont($watermarkFont)
    {
        $this->requestParameters['WatermarkFont'] = $watermarkFont;
        $this->queryParameters['WatermarkFont'] = $watermarkFont;

        return $this;
    }

    /**
     * @param string $watermarkHorizontal
     *
     * @return $this
     */
    public function setWatermarkHorizontal($watermarkHorizontal)
    {
        $this->requestParameters['WatermarkHorizontal'] = $watermarkHorizontal;
        $this->queryParameters['WatermarkHorizontal'] = $watermarkHorizontal;

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
     * @param string $watermarkFillStyle
     *
     * @return $this
     */
    public function setWatermarkFillStyle($watermarkFillStyle)
    {
        $this->requestParameters['WatermarkFillStyle'] = $watermarkFillStyle;
        $this->queryParameters['WatermarkFillStyle'] = $watermarkFillStyle;

        return $this;
    }
}
