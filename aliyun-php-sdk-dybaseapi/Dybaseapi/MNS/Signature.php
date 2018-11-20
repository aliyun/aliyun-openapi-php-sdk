<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Dybaseapi\MNS;
use Dybaseapi\MNS\Requests\BaseRequest;

class Signature
{
    const MNS_HEADER_PREFIX = "x-mns";
    static public function SignRequest($accessKey, BaseRequest &$request)
    {
        $canonicalizedMNSHeaders = "";
        $headers = $request->getHeaders();
        $contentMd5 = "";
        if (isset($headers['Content-MD5']))
        {
            $contentMd5 = $headers['Content-MD5'];
        }
        $contentType = "";
        if (isset($headers['Content-Type']))
        {
            $contentType = $headers['Content-Type'];
        }
        $date = $headers['Date'];
        $queryString = $request->getQueryString();
        $canonicalizedResource = $request->getResourcePath();
        if ($queryString != NULL)
        {
            $canonicalizedResource .= "?" . $request->getQueryString();
        }
        if (0 !== strpos($canonicalizedResource, "/"))
        {
            $canonicalizedResource = "/" . $canonicalizedResource;
        }

        $tmpHeaders = array();
        foreach ($headers as $key => $value)
        {
            if (0 === strpos($key, Constants::MNS_HEADER_PREFIX))
            {
                $tmpHeaders[$key] = $value;
            }
        }

        $canonicalizedMNSHeaders = implode("\n", array_map(function ($v, $k) { return $k . ":" . $v; }, $tmpHeaders, array_keys($tmpHeaders)));

        $stringToSign = strtoupper($request->getMethod()) . "\n" . $contentMd5 . "\n" . $contentType . "\n" . $date . "\n" . $canonicalizedMNSHeaders . "\n" . $canonicalizedResource;

        return base64_encode(hash_hmac("sha1", $stringToSign, $accessKey, $raw_output = TRUE));
    }
}
