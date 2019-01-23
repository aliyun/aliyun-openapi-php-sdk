<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of ModifyCatalog
 *
 * @method string getCatalogId()
 * @method string getSecurityToken()
 * @method string getCatalogName()
 * @method string getDescription()
 */
class ModifyCatalogRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'ModifyCatalog',
            'apigateway'
        );
    }

    /**
     * @param string $catalogId
     *
     * @return $this
     */
    public function setCatalogId($catalogId)
    {
        $this->requestParameters['CatalogId'] = $catalogId;
        $this->queryParameters['CatalogId'] = $catalogId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $catalogName
     *
     * @return $this
     */
    public function setCatalogName($catalogName)
    {
        $this->requestParameters['CatalogName'] = $catalogName;
        $this->queryParameters['CatalogName'] = $catalogName;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }
}
