<?php
/**
 * Author: skywing
 * Date: 2018/11/12
 * Time: 上午10:38
 * Describe:
 */

namespace Skywing\Douban\TESTS;

use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;
use Skywing\Douban\Http\Http;

class HttpTest extends TestCase
{
    public function testHttpClient()
    {
        $http = new Http();
        $this->assertInstanceOf(ClientInterface::class, $http->getClient());
    }



}