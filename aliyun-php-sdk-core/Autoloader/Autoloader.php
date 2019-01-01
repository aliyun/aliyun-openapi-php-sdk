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
spl_autoload_register('Autoloader::autoload');

class Autoloader
{
    /**
     * @var array
     */
    private static $autoloadPathArray = array(
        'aliyun-php-sdk-core',
        'aliyun-php-sdk-core/Auth',
        'aliyun-php-sdk-core/Http',
        'aliyun-php-sdk-core/Profile',
        'aliyun-php-sdk-core/Regions',
        'aliyun-php-sdk-core/Exception',
    );

    /**
     * Automatically find the class and load it.
     *
     * @param string $className
     */
    public static function autoload($className)
    {
        $directories = dirname(dirname(__DIR__));
        foreach (self::$autoloadPathArray as $path) {
            $file = $directories . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $className . '.php';
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
            if (is_file($file)) {
                include_once $file;
                break;
            }
        }
    }

    /**
     * Load all product folders.
     *
     * @return void
     */
    public static function loadDirectories()
    {
        $directories = dirname(dirname(__DIR__));
        foreach (glob($directories . DIRECTORY_SEPARATOR . '*') as $directory) {
            if (is_dir($directory) && basename($directory) !== 'aliyun-php-sdk-core') {
                self::$autoloadPathArray[] = basename($directory);
            }
        }
    }

    /**
     * @param string $path
     */
    public static function addAutoloadPath($path)
    {
        self::$autoloadPathArray[] = $path;
    }
}
