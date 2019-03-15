<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of MoveFacePhotos
 *
 * @method string getLibraryId()
 * @method string getTargetFaceId()
 * @method array getPhotoIds()
 * @method string getStoreName()
 * @method string getSourceFaceId()
 */
class MoveFacePhotosRequest extends \RpcAcsRequest
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
            'MoveFacePhotos',
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
     * @param string $targetFaceId
     *
     * @return $this
     */
    public function setTargetFaceId($targetFaceId)
    {
        $this->requestParameters['TargetFaceId'] = $targetFaceId;
        $this->queryParameters['TargetFaceId'] = $targetFaceId;

        return $this;
    }

    /**
     * @param array $photoIds
     *
     * @return $this
     */
    public function setPhotoIds(array $photoIds)
    {
        $this->requestParameters['PhotoIds'] = $photoIds;
        foreach ($photoIds as $i => $iValue) {
            $this->queryParameters['PhotoId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $sourceFaceId
     *
     * @return $this
     */
    public function setSourceFaceId($sourceFaceId)
    {
        $this->requestParameters['SourceFaceId'] = $sourceFaceId;
        $this->queryParameters['SourceFaceId'] = $sourceFaceId;

        return $this;
    }
}
