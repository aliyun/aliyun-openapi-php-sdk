<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ApgroupBatchAddAp
 *
 * @method string getApAssetIds()
 * @method string getApgroupId()
 */
class ApgroupBatchAddApRequest extends \RpcAcsRequest
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
            'ApgroupBatchAddAp',
            'cloudwf'
        );
    }

    /**
     * @param string $apAssetIds
     *
     * @return $this
     */
    public function setApAssetIds($apAssetIds)
    {
        $this->requestParameters['ApAssetIds'] = $apAssetIds;
        $this->queryParameters['ApAssetIds'] = $apAssetIds;

        return $this;
    }

    /**
     * @param string $apgroupId
     *
     * @return $this
     */
    public function setApgroupId($apgroupId)
    {
        $this->requestParameters['ApgroupId'] = $apgroupId;
        $this->queryParameters['ApgroupId'] = $apgroupId;

        return $this;
    }
}
