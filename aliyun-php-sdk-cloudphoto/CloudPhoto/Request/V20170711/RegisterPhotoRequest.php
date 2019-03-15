<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of RegisterPhoto
 *
 * @method string getLibraryId()
 * @method string getLatitude()
 * @method string getPhotoTitle()
 * @method string getStoreName()
 * @method string getIsVideo()
 * @method string getRemark()
 * @method string getSize()
 * @method string getTakenAt()
 * @method string getWidth()
 * @method string getLocation()
 * @method string getLongitude()
 * @method string getHeight()
 * @method string getMd5()
 */
class RegisterPhotoRequest extends \RpcAcsRequest
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
            'CloudPhoto',
            '2017-07-11',
            'RegisterPhoto',
            'cloudphoto'
        );
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        $this->requestParameters['LibraryId'] = $libraryId;
        $this->queryParameters['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @param string $latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->requestParameters['Latitude'] = $latitude;
        $this->queryParameters['Latitude'] = $latitude;

        return $this;
    }

    /**
     * @param string $photoTitle
     *
     * @return $this
     */
    public function setPhotoTitle($photoTitle)
    {
        $this->requestParameters['PhotoTitle'] = $photoTitle;
        $this->queryParameters['PhotoTitle'] = $photoTitle;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->requestParameters['StoreName'] = $storeName;
        $this->queryParameters['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $isVideo
     *
     * @return $this
     */
    public function setIsVideo($isVideo)
    {
        $this->requestParameters['IsVideo'] = $isVideo;
        $this->queryParameters['IsVideo'] = $isVideo;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->requestParameters['Size'] = $size;
        $this->queryParameters['Size'] = $size;

        return $this;
    }

    /**
     * @param string $takenAt
     *
     * @return $this
     */
    public function setTakenAt($takenAt)
    {
        $this->requestParameters['TakenAt'] = $takenAt;
        $this->queryParameters['TakenAt'] = $takenAt;

        return $this;
    }

    /**
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->requestParameters['Width'] = $width;
        $this->queryParameters['Width'] = $width;

        return $this;
    }

    /**
     * @param string $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->requestParameters['Location'] = $location;
        $this->queryParameters['Location'] = $location;

        return $this;
    }

    /**
     * @param string $longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->requestParameters['Longitude'] = $longitude;
        $this->queryParameters['Longitude'] = $longitude;

        return $this;
    }

    /**
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->requestParameters['Height'] = $height;
        $this->queryParameters['Height'] = $height;

        return $this;
    }

    /**
     * @param string $md5
     *
     * @return $this
     */
    public function setMd5($md5)
    {
        $this->requestParameters['Md5'] = $md5;
        $this->queryParameters['Md5'] = $md5;

        return $this;
    }
}
