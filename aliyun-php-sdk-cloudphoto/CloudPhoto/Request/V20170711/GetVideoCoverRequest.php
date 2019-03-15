<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of GetVideoCover
 *
 * @method string getLibraryId()
 * @method string getPhotoId()
 * @method string getStoreName()
 * @method string getZoomType()
 */
class GetVideoCoverRequest extends \RpcAcsRequest
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
            'GetVideoCover',
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
     * @param string $photoId
     *
     * @return $this
     */
    public function setPhotoId($photoId)
    {
        $this->requestParameters['PhotoId'] = $photoId;
        $this->queryParameters['PhotoId'] = $photoId;

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
     * @param string $zoomType
     *
     * @return $this
     */
    public function setZoomType($zoomType)
    {
        $this->requestParameters['ZoomType'] = $zoomType;
        $this->queryParameters['ZoomType'] = $zoomType;

        return $this;
    }
}
