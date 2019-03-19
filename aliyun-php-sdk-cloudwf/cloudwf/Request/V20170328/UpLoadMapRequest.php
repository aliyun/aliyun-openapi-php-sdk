<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpLoadMap
 *
 * @method string getFileName()
 * @method string getUploadId()
 * @method string getObjectName()
 * @method string getChunkIndex()
 * @method string getChunkCnt()
 */
class UpLoadMapRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'UpLoadMap',
            'cloudwf'
        );
    }

    /**
     * @param string $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->requestParameters['FileName'] = $fileName;
        $this->queryParameters['FileName'] = $fileName;

        return $this;
    }

    /**
     * @param string $uploadId
     *
     * @return $this
     */
    public function setUploadId($uploadId)
    {
        $this->requestParameters['UploadId'] = $uploadId;
        $this->queryParameters['UploadId'] = $uploadId;

        return $this;
    }

    /**
     * @param string $objectName
     *
     * @return $this
     */
    public function setObjectName($objectName)
    {
        $this->requestParameters['ObjectName'] = $objectName;
        $this->queryParameters['ObjectName'] = $objectName;

        return $this;
    }

    /**
     * @param string $chunkIndex
     *
     * @return $this
     */
    public function setChunkIndex($chunkIndex)
    {
        $this->requestParameters['ChunkIndex'] = $chunkIndex;
        $this->queryParameters['ChunkIndex'] = $chunkIndex;

        return $this;
    }

    /**
     * @param string $chunkCnt
     *
     * @return $this
     */
    public function setChunkCnt($chunkCnt)
    {
        $this->requestParameters['ChunkCnt'] = $chunkCnt;
        $this->queryParameters['ChunkCnt'] = $chunkCnt;

        return $this;
    }
}
