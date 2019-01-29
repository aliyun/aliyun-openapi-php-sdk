<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of CreateStore
 *
 * @method string getCompanyId()
 * @method string getComments()
 * @method string getPhone()
 * @method string getStoreName()
 * @method string getGroups()
 * @method string getOutId()
 * @method string getBrand()
 * @method string getParentId()
 */
class CreateStoreRequest extends \RpcAcsRequest
{

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
            'cloudesl',
            '2018-08-01',
            'CreateStore'
        );
    }

    /**
     * @param string $companyId
     *
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->requestParameters['CompanyId'] = $companyId;
        $this->queryParameters['CompanyId'] = $companyId;

        return $this;
    }

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->requestParameters['Comments'] = $comments;
        $this->queryParameters['Comments'] = $comments;

        return $this;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->requestParameters['Phone'] = $phone;
        $this->queryParameters['Phone'] = $phone;

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
     * @param string $groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->requestParameters['Groups'] = $groups;
        $this->queryParameters['Groups'] = $groups;

        return $this;
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function setOutId($outId)
    {
        $this->requestParameters['OutId'] = $outId;
        $this->queryParameters['OutId'] = $outId;

        return $this;
    }

    /**
     * @param string $brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->requestParameters['Brand'] = $brand;
        $this->queryParameters['Brand'] = $brand;

        return $this;
    }

    /**
     * @param string $parentId
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->requestParameters['ParentId'] = $parentId;
        $this->queryParameters['ParentId'] = $parentId;

        return $this;
    }
}
