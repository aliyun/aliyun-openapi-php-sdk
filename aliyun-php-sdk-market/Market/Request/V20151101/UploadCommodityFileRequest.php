<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UploadCommodityFile
 *
 * @method string getFileResourceType()
 * @method string getFileResource()
 * @method string getFileContentType()
 */
class UploadCommodityFileRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'UploadCommodityFile',
            'yunmarket'
        );
    }

    /**
     * @param string $fileResourceType
     *
     * @return $this
     */
    public function setFileResourceType($fileResourceType)
    {
        $this->requestParameters['FileResourceType'] = $fileResourceType;
        $this->queryParameters['FileResourceType'] = $fileResourceType;

        return $this;
    }

    /**
     * @param string $fileResource
     *
     * @return $this
     */
    public function setFileResource($fileResource)
    {
        $this->requestParameters['FileResource'] = $fileResource;
        $this->queryParameters['FileResource'] = $fileResource;

        return $this;
    }

    /**
     * @param string $fileContentType
     *
     * @return $this
     */
    public function setFileContentType($fileContentType)
    {
        $this->requestParameters['FileContentType'] = $fileContentType;
        $this->queryParameters['FileContentType'] = $fileContentType;

        return $this;
    }
}
