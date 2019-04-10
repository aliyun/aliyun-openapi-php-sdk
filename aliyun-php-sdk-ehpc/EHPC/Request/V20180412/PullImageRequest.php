<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PullImage
 *
 * @method string getContainerType()
 * @method string getClusterId()
 * @method string getRepository()
 * @method string getImageTag()
 */
class PullImageRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'PullImage',
            'ehs'
        );
    }

    /**
     * @param string $containerType
     *
     * @return $this
     */
    public function setContainerType($containerType)
    {
        $this->requestParameters['ContainerType'] = $containerType;
        $this->queryParameters['ContainerType'] = $containerType;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->requestParameters['Repository'] = $repository;
        $this->queryParameters['Repository'] = $repository;

        return $this;
    }

    /**
     * @param string $imageTag
     *
     * @return $this
     */
    public function setImageTag($imageTag)
    {
        $this->requestParameters['ImageTag'] = $imageTag;
        $this->queryParameters['ImageTag'] = $imageTag;

        return $this;
    }
}
