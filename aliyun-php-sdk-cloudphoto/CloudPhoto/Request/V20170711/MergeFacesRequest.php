<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of MergeFaces
 *
 * @method string getLibraryId()
 * @method string getTargetFaceId()
 * @method string getStoreName()
 * @method array getFaceIds()
 */
class MergeFacesRequest extends \RpcAcsRequest
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
            'MergeFaces',
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
     * @param array $faceIds
     *
     * @return $this
     */
    public function setFaceIds(array $faceIds)
    {
        $this->requestParameters['FaceIds'] = $faceIds;
        foreach ($faceIds as $i => $iValue) {
            $this->queryParameters['FaceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
