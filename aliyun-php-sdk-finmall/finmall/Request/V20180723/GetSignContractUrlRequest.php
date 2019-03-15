<?php

namespace finmall\Request\V20180723;

/**
 * Request of GetSignContractUrl
 *
 * @method string getExtInfo()
 * @method string getBizId()
 * @method string getSceneId()
 * @method string getReturnUrl()
 * @method string getUserId()
 */
class GetSignContractUrlRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'GetSignContractUrl',
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
     * @param string $returnUrl
     *
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->requestParameters['ReturnUrl'] = $returnUrl;
        $this->queryParameters['ReturnUrl'] = $returnUrl;

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
