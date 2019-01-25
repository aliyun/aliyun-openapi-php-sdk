<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of QueryPerspectives
 *
 */
class QueryPerspectivesRequest extends \RpcAcsRequest
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
            'Chatbot',
            '2017-10-11',
            'QueryPerspectives',
            'beebot'
        );
    }
}
