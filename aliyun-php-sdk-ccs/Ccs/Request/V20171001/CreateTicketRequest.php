<?php

namespace Ccs\Request\V20171001;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateTicket
 *
 * @method string getCreatorId()
 * @method string getDescription()
 * @method string getType()
 * @method string getCcsInstanceId()
 * @method string getCustomFields()
 */
class CreateTicketRequest extends \RpcAcsRequest
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
            'Ccs',
            '2017-10-01',
            'CreateTicket',
            'ccs'
        );
    }

    /**
     * @param string $creatorId
     *
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->requestParameters['CreatorId'] = $creatorId;
        $this->queryParameters['CreatorId'] = $creatorId;

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        $this->requestParameters['CcsInstanceId'] = $ccsInstanceId;
        $this->queryParameters['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @param string $customFields
     *
     * @return $this
     */
    public function setCustomFields($customFields)
    {
        $this->requestParameters['CustomFields'] = $customFields;
        $this->queryParameters['CustomFields'] = $customFields;

        return $this;
    }
}
