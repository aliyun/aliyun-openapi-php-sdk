<?php

namespace vod\Request\V20170321;

/**
 * Request of RegisterMedia
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getTemplateGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getRegisterMetadatas()
 * @method string getWorkFlowId()
 */
class RegisterMediaRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'RegisterMedia',
            'vod'
        );
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

        return $this;
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
     * @param string $templateGroupId
     *
     * @return $this
     */
    public function setTemplateGroupId($templateGroupId)
    {
        $this->requestParameters['TemplateGroupId'] = $templateGroupId;
        $this->queryParameters['TemplateGroupId'] = $templateGroupId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $registerMetadatas
     *
     * @return $this
     */
    public function setRegisterMetadatas($registerMetadatas)
    {
        $this->requestParameters['RegisterMetadatas'] = $registerMetadatas;
        $this->queryParameters['RegisterMetadatas'] = $registerMetadatas;

        return $this;
    }

    /**
     * @param string $workFlowId
     *
     * @return $this
     */
    public function setWorkFlowId($workFlowId)
    {
        $this->requestParameters['WorkFlowId'] = $workFlowId;
        $this->queryParameters['WorkFlowId'] = $workFlowId;

        return $this;
    }
}
