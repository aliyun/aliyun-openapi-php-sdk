<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SendDryRunSystemEvent
 *
 * @method string getProduct()
 * @method string getGroupId()
 * @method string getEventName()
 * @method string getEventContent()
 */
class SendDryRunSystemEventRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'SendDryRunSystemEvent',
            'cms'
        );
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->queryParameters['Product'] = $product;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->requestParameters['EventName'] = $eventName;
        $this->queryParameters['EventName'] = $eventName;

        return $this;
    }

    /**
     * @param string $eventContent
     *
     * @return $this
     */
    public function setEventContent($eventContent)
    {
        $this->requestParameters['EventContent'] = $eventContent;
        $this->queryParameters['EventContent'] = $eventContent;

        return $this;
    }
}
