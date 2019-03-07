<?php

namespace Actiontrail\Request\V20171204;

/**
 * Request of StopLogging
 *
 * @method string getName()
 */
class StopLoggingRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Actiontrail',
            '2017-12-04',
            'StopLogging',
            'actiontrail'
        );
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
}
