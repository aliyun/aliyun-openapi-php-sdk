<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of CreatePhotoStore
 *
 * @method string getBucketName()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getDefaultQuota()
 */
class CreatePhotoStoreRequest extends \RpcAcsRequest
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
            'CloudPhoto',
            '2017-07-11',
            'CreatePhotoStore',
            'cloudphoto'
        );
    }

    /**
     * @param string $bucketName
     *
     * @return $this
     */
    public function setBucketName($bucketName)
    {
        $this->requestParameters['BucketName'] = $bucketName;
        $this->queryParameters['BucketName'] = $bucketName;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->requestParameters['StoreName'] = $storeName;
        $this->queryParameters['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $defaultQuota
     *
     * @return $this
     */
    public function setDefaultQuota($defaultQuota)
    {
        $this->requestParameters['DefaultQuota'] = $defaultQuota;
        $this->queryParameters['DefaultQuota'] = $defaultQuota;

        return $this;
    }
}
