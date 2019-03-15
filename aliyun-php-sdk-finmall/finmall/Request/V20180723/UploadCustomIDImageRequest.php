<?php

namespace finmall\Request\V20180723;

/**
 * Request of UploadCustomIDImage
 *
 * @method string getImageType()
 * @method string getSide()
 * @method string getImageFile()
 * @method string getUserId()
 */
class UploadCustomIDImageRequest extends \RpcAcsRequest
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
            'finmall',
            '2018-07-23',
            'UploadCustomIDImage',
            'finmall'
        );
    }

    /**
     * @param string $imageType
     *
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->requestParameters['ImageType'] = $imageType;
        $this->queryParameters['ImageType'] = $imageType;

        return $this;
    }

    /**
     * @param string $side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $this->requestParameters['Side'] = $side;
        $this->queryParameters['Side'] = $side;

        return $this;
    }

    /**
     * @param string $imageFile
     *
     * @return $this
     */
    public function setImageFile($imageFile)
    {
        $this->requestParameters['ImageFile'] = $imageFile;
        $this->queryParameters['ImageFile'] = $imageFile;

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
