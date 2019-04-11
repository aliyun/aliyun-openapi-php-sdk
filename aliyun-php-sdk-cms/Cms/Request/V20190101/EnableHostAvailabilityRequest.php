<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of EnableHostAvailability
 *
 * @method array getIds()
 */
class EnableHostAvailabilityRequest extends \RpcAcsRequest
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
            'EnableHostAvailability',
            'cms'
        );
    }

    /**
     * @param array $id
     *
     * @return $this
     */
    public function setIds(array $id)
    {
        $this->requestParameters['Ids'] = $id;
        foreach ($id as $i => $iValue) {
            $this->queryParameters['Id.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
