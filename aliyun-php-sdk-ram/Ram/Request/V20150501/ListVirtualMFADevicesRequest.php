<?php

namespace Ram\Request\V20150501;

/**
 * Request of ListVirtualMFADevices
 *
 */
class ListVirtualMFADevicesRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Ram',
            '2015-05-01',
            'ListVirtualMFADevices',
            'ram'
        );
    }
}
