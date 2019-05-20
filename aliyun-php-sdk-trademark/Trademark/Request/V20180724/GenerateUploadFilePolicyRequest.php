<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GenerateUploadFilePolicy
 *
 * @method string getFileType()
 * @method string getBizId()
 */
class GenerateUploadFilePolicyRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'GenerateUploadFilePolicy',
            'trademark'
        );
    }

    /**
     * @param string $fileType
     *
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->requestParameters['FileType'] = $fileType;
        $this->queryParameters['FileType'] = $fileType;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }
}
