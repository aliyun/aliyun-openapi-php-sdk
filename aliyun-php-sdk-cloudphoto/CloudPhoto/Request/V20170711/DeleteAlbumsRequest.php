<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of DeleteAlbums
 *
 * @method string getLibraryId()
 * @method array getAlbumIds()
 * @method string getStoreName()
 */
class DeleteAlbumsRequest extends \RpcAcsRequest
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
            'DeleteAlbums',
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
     * @param array $albumIds
     *
     * @return $this
     */
    public function setAlbumIds(array $albumIds)
    {
        $this->requestParameters['AlbumIds'] = $albumIds;
        foreach ($albumIds as $i => $iValue) {
            $this->queryParameters['AlbumId.' . ($i + 1)] = $iValue;
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
}
