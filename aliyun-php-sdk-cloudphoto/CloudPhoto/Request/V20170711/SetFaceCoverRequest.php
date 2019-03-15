<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of SetFaceCover
 *
 * @method string getLibraryId()
 * @method string getPhotoId()
 * @method string getStoreName()
 * @method string getFaceId()
 */
class SetFaceCoverRequest extends \RpcAcsRequest
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
            'SetFaceCover',
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
     * @param string $faceId
     *
     * @return $this
     */
    public function setFaceId($faceId)
    {
        $this->requestParameters['FaceId'] = $faceId;
        $this->queryParameters['FaceId'] = $faceId;

        return $this;
    }
}
