<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListSourceCodeAccount
 *
 * @method string getCodeRepoType()
 * @method string getInstanceId()
 */
class ListSourceCodeAccountRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2018-12-01',
            'ListSourceCodeAccount',
            'cr'
        );
    }

    /**
     * @param string $codeRepoType
     *
     * @return $this
     */
    public function setCodeRepoType($codeRepoType)
    {
        $this->requestParameters['CodeRepoType'] = $codeRepoType;
        $this->queryParameters['CodeRepoType'] = $codeRepoType;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
