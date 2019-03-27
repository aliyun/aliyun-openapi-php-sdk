<?php

namespace ivision\Request\V20190308;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PredictImage
 *
 * @method string getProjectId()
 * @method string getShowLog()
 * @method string getOwnerId()
 * @method string getIterationId()
 * @method string getDataUrls()
 */
class PredictImageRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ivision',
            '2019-03-08',
            'PredictImage',
            'ivision'
        );
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $showLog
     *
     * @return $this
     */
    public function setShowLog($showLog)
    {
        $this->requestParameters['ShowLog'] = $showLog;
        $this->queryParameters['ShowLog'] = $showLog;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $iterationId
     *
     * @return $this
     */
    public function setIterationId($iterationId)
    {
        $this->requestParameters['IterationId'] = $iterationId;
        $this->queryParameters['IterationId'] = $iterationId;

        return $this;
    }

    /**
     * @param string $dataUrls
     *
     * @return $this
     */
    public function setDataUrls($dataUrls)
    {
        $this->requestParameters['DataUrls'] = $dataUrls;
        $this->queryParameters['DataUrls'] = $dataUrls;

        return $this;
    }
}
