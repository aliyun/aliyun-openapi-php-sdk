<?php

namespace vod\Request\V20170321;

/**
 * Request of DescribePlayTopVideos
 *
 * @method string getPageSize()
 * @method string getOwnerId()
 * @method string getBizDate()
 * @method string getPageNo()
 */
class DescribePlayTopVideosRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'DescribePlayTopVideos',
            'vod'
        );
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $bizDate
     *
     * @return $this
     */
    public function setBizDate($bizDate)
    {
        $this->requestParameters['BizDate'] = $bizDate;
        $this->queryParameters['BizDate'] = $bizDate;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->requestParameters['PageNo'] = $pageNo;
        $this->queryParameters['PageNo'] = $pageNo;

        return $this;
    }
}
