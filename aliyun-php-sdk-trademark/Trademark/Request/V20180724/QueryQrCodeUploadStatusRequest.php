<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryQrCodeUploadStatus
 *
 * @method string getOssKey()
 * @method string getFieldKey()
 * @method string getUuid()
 */
class QueryQrCodeUploadStatusRequest extends \RpcAcsRequest
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
            'QueryQrCodeUploadStatus',
            'trademark'
        );
    }

    /**
     * @param string $ossKey
     *
     * @return $this
     */
    public function setOssKey($ossKey)
    {
        $this->requestParameters['OssKey'] = $ossKey;
        $this->queryParameters['OssKey'] = $ossKey;

        return $this;
    }

    /**
     * @param string $fieldKey
     *
     * @return $this
     */
    public function setFieldKey($fieldKey)
    {
        $this->requestParameters['FieldKey'] = $fieldKey;
        $this->queryParameters['FieldKey'] = $fieldKey;

        return $this;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->requestParameters['Uuid'] = $uuid;
        $this->queryParameters['Uuid'] = $uuid;

        return $this;
    }
}
