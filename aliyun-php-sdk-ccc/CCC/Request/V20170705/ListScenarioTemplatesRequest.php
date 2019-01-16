<?php

namespace CCC\Request\V20170705;

/**
 * Request of ListScenarioTemplates
 *
 */
class ListScenarioTemplatesRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'ListScenarioTemplates'
        );
    }
}
