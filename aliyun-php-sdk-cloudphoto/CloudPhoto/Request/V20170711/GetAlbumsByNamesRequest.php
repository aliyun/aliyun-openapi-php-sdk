<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of GetAlbumsByNames
 *
 * @method string getLibraryId()
 * @method array getNames()
 * @method string getStoreName()
 */
class GetAlbumsByNamesRequest extends \RpcAcsRequest
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
            'GetAlbumsByNames',
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
     * @param array $names
     *
     * @return $this
     */
    public function setNames(array $names)
    {
        $this->requestParameters['Names'] = $names;
        foreach ($names as $i => $iValue) {
            $this->queryParameters['Name.' . ($i + 1)] = $iValue;
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
