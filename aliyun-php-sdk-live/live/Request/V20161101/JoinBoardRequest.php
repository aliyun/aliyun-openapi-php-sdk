<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of JoinBoard
 *
 * @method string getBoardId()
 * @method string getAppUid()
 * @method string getOwnerId()
 * @method string getAppId()
 */
class JoinBoardRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'JoinBoard',
            'live'
        );
    }

    /**
     * @param string $boardId
     *
     * @return $this
     */
    public function setBoardId($boardId)
    {
        $this->requestParameters['BoardId'] = $boardId;
        $this->queryParameters['BoardId'] = $boardId;

        return $this;
    }

    /**
     * @param string $appUid
     *
     * @return $this
     */
    public function setAppUid($appUid)
    {
        $this->requestParameters['AppUid'] = $appUid;
        $this->queryParameters['AppUid'] = $appUid;

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
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }
}
