<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyCasterComponent
 *
 * @method string getComponentId()
 * @method string getComponentType()
 * @method string getImageLayerContent()
 * @method string getCasterId()
 * @method string getEffect()
 * @method string getComponentLayer()
 * @method string getCaptionLayerContent()
 * @method string getComponentName()
 * @method string getOwnerId()
 * @method string getTextLayerContent()
 */
class ModifyCasterComponentRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'ModifyCasterComponent',
            'live'
        );
    }

    /**
     * @param string $componentId
     *
     * @return $this
     */
    public function setComponentId($componentId)
    {
        $this->requestParameters['ComponentId'] = $componentId;
        $this->queryParameters['ComponentId'] = $componentId;

        return $this;
    }

    /**
     * @param string $componentType
     *
     * @return $this
     */
    public function setComponentType($componentType)
    {
        $this->requestParameters['ComponentType'] = $componentType;
        $this->queryParameters['ComponentType'] = $componentType;

        return $this;
    }

    /**
     * @param string $imageLayerContent
     *
     * @return $this
     */
    public function setImageLayerContent($imageLayerContent)
    {
        $this->requestParameters['ImageLayerContent'] = $imageLayerContent;
        $this->queryParameters['ImageLayerContent'] = $imageLayerContent;

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        $this->requestParameters['CasterId'] = $casterId;
        $this->queryParameters['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $effect
     *
     * @return $this
     */
    public function setEffect($effect)
    {
        $this->requestParameters['Effect'] = $effect;
        $this->queryParameters['Effect'] = $effect;

        return $this;
    }

    /**
     * @param string $componentLayer
     *
     * @return $this
     */
    public function setComponentLayer($componentLayer)
    {
        $this->requestParameters['ComponentLayer'] = $componentLayer;
        $this->queryParameters['ComponentLayer'] = $componentLayer;

        return $this;
    }

    /**
     * @param string $captionLayerContent
     *
     * @return $this
     */
    public function setCaptionLayerContent($captionLayerContent)
    {
        $this->requestParameters['CaptionLayerContent'] = $captionLayerContent;
        $this->queryParameters['CaptionLayerContent'] = $captionLayerContent;

        return $this;
    }

    /**
     * @param string $componentName
     *
     * @return $this
     */
    public function setComponentName($componentName)
    {
        $this->requestParameters['ComponentName'] = $componentName;
        $this->queryParameters['ComponentName'] = $componentName;

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
     * @param string $textLayerContent
     *
     * @return $this
     */
    public function setTextLayerContent($textLayerContent)
    {
        $this->requestParameters['TextLayerContent'] = $textLayerContent;
        $this->queryParameters['TextLayerContent'] = $textLayerContent;

        return $this;
    }
}
