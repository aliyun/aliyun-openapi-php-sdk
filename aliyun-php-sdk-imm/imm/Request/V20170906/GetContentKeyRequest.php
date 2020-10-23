<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetContentKey
 *
 * @method string getProject()
 * @method string getVersionId()
 * @method string getDRMServerId()
 * @method string getKeyIds()
 */
class GetContentKeyRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'GetContentKey',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $versionId
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->requestParameters['VersionId'] = $versionId;
        $this->queryParameters['VersionId'] = $versionId;

        return $this;
    }

    /**
     * @param string $dRMServerId
     *
     * @return $this
     */
    public function setDRMServerId($dRMServerId)
    {
        $this->requestParameters['DRMServerId'] = $dRMServerId;
        $this->queryParameters['DRMServerId'] = $dRMServerId;

        return $this;
    }

    /**
     * @param string $keyIds
     *
     * @return $this
     */
    public function setKeyIds($keyIds)
    {
        $this->requestParameters['KeyIds'] = $keyIds;
        $this->queryParameters['KeyIds'] = $keyIds;

        return $this;
    }
}
