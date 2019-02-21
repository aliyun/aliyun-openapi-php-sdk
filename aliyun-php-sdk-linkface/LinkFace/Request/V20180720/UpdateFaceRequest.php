<?php

namespace LinkFace\Request\V20180720;

/**
 * Request of UpdateFace
 *
 * @method string getImage()
 * @method string getUserId()
 * @method string getUserInfo()
 */
class UpdateFaceRequest extends \RpcAcsRequest
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
            'UpdateFace'
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
