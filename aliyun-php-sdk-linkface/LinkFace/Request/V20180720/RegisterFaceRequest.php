<?php

namespace LinkFace\Request\V20180720;

/**
 * Request of RegisterFace
 *
 * @method string getImage()
 * @method string getGroupId()
 * @method string getUserId()
 * @method string getUserInfo()
 */
class RegisterFaceRequest extends \RpcAcsRequest
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
            'LinkFace',
            '2018-07-20',
            'RegisterFace'
        );
    }

    /**
     * @param string $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->requestParameters['Image'] = $image;
        $this->queryParameters['Image'] = $image;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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

    /**
     * @param string $userInfo
     *
     * @return $this
     */
    public function setUserInfo($userInfo)
    {
        $this->requestParameters['UserInfo'] = $userInfo;
        $this->queryParameters['UserInfo'] = $userInfo;

        return $this;
    }
}
