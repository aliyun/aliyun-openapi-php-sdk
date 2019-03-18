<?php

namespace Ots\Request\V20160620;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListInstance
 *
 * @method string getaccess_key_id()
 * @method string getResourceOwnerId()
 * @method string getPageSize()
 * @method string getPageNum()
 * @method array getTagInfos()
 */
class ListInstanceRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ots',
            '2016-06-20',
            'ListInstance',
            'ots'
        );
    }

    /**
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        $this->requestParameters['access_key_id'] = $access_key_id;
        $this->queryParameters['access_key_id'] = $access_key_id;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
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
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setTagInfos(array $value)
    {
        $this->requestParameters['TagInfos'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['TagInfo.' . ($i + 1) . '.TagValue'] = $value[$i]['TagValue'];
            $this->queryParameters['TagInfo.' . ($i + 1) . '.TagKey'] = $value[$i]['TagKey'];
        }

        return $this;
    }
}
