<?php

namespace finmall\Request\V20180723;

/**
 * Request of QuerySignResult
 *
 * @method string getExtInfo()
 * @method string getBizId()
 * @method string getSceneId()
 * @method string getType()
 * @method string getUserId()
 */
class QuerySignResultRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'QuerySignResult',
            'finmall'
        );
    }

    /**
     * @param string $extInfo
     *
     * @return $this
     */
    public function setExtInfo($extInfo)
    {
        $this->requestParameters['ExtInfo'] = $extInfo;
        $this->queryParameters['ExtInfo'] = $extInfo;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $sceneId
     *
     * @return $this
     */
    public function setSceneId($sceneId)
    {
        $this->requestParameters['SceneId'] = $sceneId;
        $this->queryParameters['SceneId'] = $sceneId;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }
}
