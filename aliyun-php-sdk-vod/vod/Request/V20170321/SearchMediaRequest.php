<?php

namespace vod\Request\V20170321;

/**
 * Request of SearchMedia
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getMatch()
 * @method string getSessionId()
 * @method string getOwnerId()
 * @method string getScrollToken()
 * @method string getPageNo()
 * @method string getSearchType()
 * @method string getPageSize()
 * @method string getSortBy()
 * @method string getResultTypes()
 * @method string getFields()
 */
class SearchMediaRequest extends \RpcAcsRequest
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
            'SearchMedia',
            'vod'
        );
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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $match
     *
     * @return $this
     */
    public function setMatch($match)
    {
        $this->requestParameters['Match'] = $match;
        $this->queryParameters['Match'] = $match;

        return $this;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->requestParameters['SessionId'] = $sessionId;
        $this->queryParameters['SessionId'] = $sessionId;

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
     * @param string $scrollToken
     *
     * @return $this
     */
    public function setScrollToken($scrollToken)
    {
        $this->requestParameters['ScrollToken'] = $scrollToken;
        $this->queryParameters['ScrollToken'] = $scrollToken;

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

    /**
     * @param string $searchType
     *
     * @return $this
     */
    public function setSearchType($searchType)
    {
        $this->requestParameters['SearchType'] = $searchType;
        $this->queryParameters['SearchType'] = $searchType;

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
     * @param string $sortBy
     *
     * @return $this
     */
    public function setSortBy($sortBy)
    {
        $this->requestParameters['SortBy'] = $sortBy;
        $this->queryParameters['SortBy'] = $sortBy;

        return $this;
    }

    /**
     * @param string $resultTypes
     *
     * @return $this
     */
    public function setResultTypes($resultTypes)
    {
        $this->requestParameters['ResultTypes'] = $resultTypes;
        $this->queryParameters['ResultTypes'] = $resultTypes;

        return $this;
    }

    /**
     * @param string $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->requestParameters['Fields'] = $fields;
        $this->queryParameters['Fields'] = $fields;

        return $this;
    }
}
