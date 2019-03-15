<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of SetQuota
 *
 * @method string getTotalQuota()
 * @method string getLibraryId()
 * @method string getStoreName()
 */
class SetQuotaRequest extends \RpcAcsRequest
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
            'SetQuota',
            'cloudphoto'
        );
    }

    /**
     * @param string $totalQuota
     *
     * @return $this
     */
    public function setTotalQuota($totalQuota)
    {
        $this->requestParameters['TotalQuota'] = $totalQuota;
        $this->queryParameters['TotalQuota'] = $totalQuota;

        return $this;
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        $this->requestParameters['LibraryId'] = $libraryId;
        $this->queryParameters['LibraryId'] = $libraryId;

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
}
