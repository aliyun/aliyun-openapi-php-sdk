<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteContainerApps
 *
 * @method array getContainerApps()
 */
class DeleteContainerAppsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'DeleteContainerApps',
            'ehs'
        );
    }

    /**
     * @param array $containerApp
     *
     * @return $this
     */
    public function setContainerApps(array $containerApp)
    {
        $this->requestParameters['ContainerApps'] = $containerApp;
        foreach ($containerApp as $depth1 => $depth1Value) {
            $this->queryParameters['ContainerApp.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }
}
