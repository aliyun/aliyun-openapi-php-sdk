<?php

namespace NAS\Request\V20170626;

/**
 * Request of CreateAccessGroup
 *
 * @method string getDescription()
 * @method string getAccessGroupType()
 * @method string getAccessGroupName()
 */
class CreateAccessGroupRequest extends \RpcAcsRequest
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
            'NAS',
            '2017-06-26',
            'CreateAccessGroup',
            'nas'
        );
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

    /**
     * @param string $accessGroupType
     *
     * @return $this
     */
    public function setAccessGroupType($accessGroupType)
    {
        $this->requestParameters['AccessGroupType'] = $accessGroupType;
        $this->queryParameters['AccessGroupType'] = $accessGroupType;

        return $this;
    }

    /**
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        $this->requestParameters['AccessGroupName'] = $accessGroupName;
        $this->queryParameters['AccessGroupName'] = $accessGroupName;

        return $this;
    }
}
