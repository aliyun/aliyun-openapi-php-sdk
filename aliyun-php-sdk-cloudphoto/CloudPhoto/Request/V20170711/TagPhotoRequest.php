<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of TagPhoto
 *
 * @method string getLibraryId()
 * @method array getConfidences()
 * @method string getStoreName()
 * @method string getPhotoId()
 * @method array getTagKeys()
 */
class TagPhotoRequest extends \RpcAcsRequest
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
            'TagPhoto',
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
     * @param array $confidences
     *
     * @return $this
     */
    public function setConfidences(array $confidences)
    {
        $this->requestParameters['Confidences'] = $confidences;
        foreach ($confidences as $i => $iValue) {
            $this->queryParameters['Confidence.' . ($i + 1)] = $iValue;
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
     * @param array $tagKeys
     *
     * @return $this
     */
    public function setTagKeys(array $tagKeys)
    {
        $this->requestParameters['TagKeys'] = $tagKeys;
        foreach ($tagKeys as $i => $iValue) {
            $this->queryParameters['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
