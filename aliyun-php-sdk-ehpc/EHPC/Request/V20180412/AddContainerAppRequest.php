<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddContainerApp
 *
 * @method string getContainerType()
 * @method string getName()
 * @method string getDescription()
 * @method string getRepository()
 * @method string getImageTag()
 */
class AddContainerAppRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'AddContainerApp',
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
