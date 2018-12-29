<?php

namespace Nlp\Request\V20180408;

/**
 * Class KWERequest
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2019 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/aliyun-openapi-php-sdk
 *
 * @method string getDomain()
 */
class KWERequest extends \RoaAcsRequest
{
    /**
     * @var string
     */
    protected $uriPattern = '/nlp/api/kwe/[Domain]';

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
            'Nlp',
            '2018-04-08',
            'KWE',
            'nlp',
            'openAPI'
        );
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->pathParameters['Domain'] = $domain;
        return $this;
    }

}
