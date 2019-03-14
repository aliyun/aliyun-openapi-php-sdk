<?php

namespace MoPen\Request\V20180211;

/**
 * Request of MoPenDoRecognize
 *
 * @method string getCanvasId()
 * @method string getEndY()
 * @method string getEndX()
 * @method string getJsonConf()
 * @method string getExportType()
 * @method string getStartY()
 * @method string getStartX()
 */
class MoPenDoRecognizeRequest extends \RpcAcsRequest
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
            'MoPen',
            '2018-02-11',
            'MoPenDoRecognize',
            'mopen'
        );
    }

    /**
     * @param string $canvasId
     *
     * @return $this
     */
    public function setCanvasId($canvasId)
    {
        $this->requestParameters['CanvasId'] = $canvasId;
        $this->queryParameters['CanvasId'] = $canvasId;

        return $this;
    }

    /**
     * @param string $endY
     *
     * @return $this
     */
    public function setEndY($endY)
    {
        $this->requestParameters['EndY'] = $endY;
        $this->queryParameters['EndY'] = $endY;

        return $this;
    }

    /**
     * @param string $endX
     *
     * @return $this
     */
    public function setEndX($endX)
    {
        $this->requestParameters['EndX'] = $endX;
        $this->queryParameters['EndX'] = $endX;

        return $this;
    }

    /**
     * @param string $jsonConf
     *
     * @return $this
     */
    public function setJsonConf($jsonConf)
    {
        $this->requestParameters['JsonConf'] = $jsonConf;
        $this->queryParameters['JsonConf'] = $jsonConf;

        return $this;
    }

    /**
     * @param string $exportType
     *
     * @return $this
     */
    public function setExportType($exportType)
    {
        $this->requestParameters['ExportType'] = $exportType;
        $this->queryParameters['ExportType'] = $exportType;

        return $this;
    }

    /**
     * @param string $startY
     *
     * @return $this
     */
    public function setStartY($startY)
    {
        $this->requestParameters['StartY'] = $startY;
        $this->queryParameters['StartY'] = $startY;

        return $this;
    }

    /**
     * @param string $startX
     *
     * @return $this
     */
    public function setStartX($startX)
    {
        $this->requestParameters['StartX'] = $startX;
        $this->queryParameters['StartX'] = $startX;

        return $this;
    }
}
