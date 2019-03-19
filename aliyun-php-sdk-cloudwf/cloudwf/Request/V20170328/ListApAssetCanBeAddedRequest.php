<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListApAssetCanBeAdded
 *
 * @method string getSearchName()
 * @method string getApgroupId()
 * @method string getLength()
 * @method string getPageIndex()
 * @method string getSearchMac()
 * @method string getSearchModel()
 */
class ListApAssetCanBeAddedRequest extends \RpcAcsRequest
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
            'ListApAssetCanBeAdded',
            'cloudwf'
        );
    }

    /**
     * @param string $searchName
     *
     * @return $this
     */
    public function setSearchName($searchName)
    {
        $this->requestParameters['SearchName'] = $searchName;
        $this->queryParameters['SearchName'] = $searchName;

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

    /**
     * @param string $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->requestParameters['Length'] = $length;
        $this->queryParameters['Length'] = $length;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->requestParameters['PageIndex'] = $pageIndex;
        $this->queryParameters['PageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * @param string $searchMac
     *
     * @return $this
     */
    public function setSearchMac($searchMac)
    {
        $this->requestParameters['SearchMac'] = $searchMac;
        $this->queryParameters['SearchMac'] = $searchMac;

        return $this;
    }

    /**
     * @param string $searchModel
     *
     * @return $this
     */
    public function setSearchModel($searchModel)
    {
        $this->requestParameters['SearchModel'] = $searchModel;
        $this->queryParameters['SearchModel'] = $searchModel;

        return $this;
    }
}
