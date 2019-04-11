<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteTranscodeTemplateGroup
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTranscodeTemplateIds()
 * @method string getOwnerId()
 * @method string getTranscodeTemplateGroupId()
 * @method string getForceDelGroup()
 */
class DeleteTranscodeTemplateGroupRequest extends \RpcAcsRequest
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
            'DeleteTranscodeTemplateGroup',
            'vod'
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
     * @param string $transcodeTemplateIds
     *
     * @return $this
     */
    public function setTranscodeTemplateIds($transcodeTemplateIds)
    {
        $this->requestParameters['TranscodeTemplateIds'] = $transcodeTemplateIds;
        $this->queryParameters['TranscodeTemplateIds'] = $transcodeTemplateIds;

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
     * @param string $transcodeTemplateGroupId
     *
     * @return $this
     */
    public function setTranscodeTemplateGroupId($transcodeTemplateGroupId)
    {
        $this->requestParameters['TranscodeTemplateGroupId'] = $transcodeTemplateGroupId;
        $this->queryParameters['TranscodeTemplateGroupId'] = $transcodeTemplateGroupId;

        return $this;
    }

    /**
     * @param string $forceDelGroup
     *
     * @return $this
     */
    public function setForceDelGroup($forceDelGroup)
    {
        $this->requestParameters['ForceDelGroup'] = $forceDelGroup;
        $this->queryParameters['ForceDelGroup'] = $forceDelGroup;

        return $this;
    }
}
