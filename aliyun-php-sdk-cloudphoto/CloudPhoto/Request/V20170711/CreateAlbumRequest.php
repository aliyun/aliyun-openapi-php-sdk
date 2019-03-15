<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of CreateAlbum
 *
 * @method string getAlbumName()
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getRemark()
 */
class CreateAlbumRequest extends \RpcAcsRequest
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
            'CreateAlbum',
            'cloudphoto'
        );
    }

    /**
     * @param string $albumName
     *
     * @return $this
     */
    public function setAlbumName($albumName)
    {
        $this->requestParameters['AlbumName'] = $albumName;
        $this->queryParameters['AlbumName'] = $albumName;

        return $this;
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
}
