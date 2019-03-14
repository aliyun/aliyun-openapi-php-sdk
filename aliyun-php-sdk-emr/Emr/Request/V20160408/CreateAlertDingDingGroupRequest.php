<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateAlertDingDingGroup
 *
 * @method string getResourceOwnerId()
 * @method string getName()
 * @method string getDescription()
 * @method string getWebHookUrl()
 */
class CreateAlertDingDingGroupRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'CreateAlertDingDingGroup',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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

    /**
     * @param string $webHookUrl
     *
     * @return $this
     */
    public function setWebHookUrl($webHookUrl)
    {
        $this->requestParameters['WebHookUrl'] = $webHookUrl;
        $this->queryParameters['WebHookUrl'] = $webHookUrl;

        return $this;
    }
}
