<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetUserSourceAccount
 *
 * @method string getSourceOriginType()
 */
class GetUserSourceAccountRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users/sourceAccount';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetUserSourceAccount',
            'cr'
        );
    }

    /**
     * @param string $sourceOriginType
     *
     * @return $this
     */
    public function setSourceOriginType($sourceOriginType)
    {
        $this->requestParameters['SourceOriginType'] = $sourceOriginType;
        $this->queryParameters['SourceOriginType'] = $sourceOriginType;

        return $this;
    }
}
