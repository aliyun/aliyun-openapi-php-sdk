<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of CreateTransaction
 *
 * @method string getExt()
 * @method string getSize()
 * @method string getLibraryId()
 * @method string getStoreName()
 * @method string getForce()
 * @method string getMd5()
 */
class CreateTransactionRequest extends \RpcAcsRequest
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
            'CreateTransaction',
            'cloudphoto'
        );
    }

    /**
     * @param string $ext
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->requestParameters['Ext'] = $ext;
        $this->queryParameters['Ext'] = $ext;

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
     * @param string $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        $this->requestParameters['Force'] = $force;
        $this->queryParameters['Force'] = $force;

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
