<?php

namespace NAS\Request\V20170626;

/**
 * Request of DeleteTieringPolicy
 *
 * @method string getName()
 */
class DeleteTieringPolicyRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'NAS',
            '2017-06-26',
            'DeleteTieringPolicy',
            'nas'
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
