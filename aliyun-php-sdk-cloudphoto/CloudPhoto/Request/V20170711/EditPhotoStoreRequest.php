<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of EditPhotoStore
 *
 * @method string getAutoCleanEnabled()
 * @method string getDefaultTrashQuota()
 * @method string getStoreName()
 * @method string getRemark()
 * @method string getDefaultQuota()
 * @method string getAutoCleanDays()
 */
class EditPhotoStoreRequest extends \RpcAcsRequest
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
            'EditPhotoStore',
            'cloudphoto'
        );
    }

    /**
     * @param string $autoCleanEnabled
     *
     * @return $this
     */
    public function setAutoCleanEnabled($autoCleanEnabled)
    {
        $this->requestParameters['AutoCleanEnabled'] = $autoCleanEnabled;
        $this->queryParameters['AutoCleanEnabled'] = $autoCleanEnabled;

        return $this;
    }

    /**
     * @param string $defaultTrashQuota
     *
     * @return $this
     */
    public function setDefaultTrashQuota($defaultTrashQuota)
    {
        $this->requestParameters['DefaultTrashQuota'] = $defaultTrashQuota;
        $this->queryParameters['DefaultTrashQuota'] = $defaultTrashQuota;

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

    /**
     * @param string $autoCleanDays
     *
     * @return $this
     */
    public function setAutoCleanDays($autoCleanDays)
    {
        $this->requestParameters['AutoCleanDays'] = $autoCleanDays;
        $this->queryParameters['AutoCleanDays'] = $autoCleanDays;

        return $this;
    }
}
