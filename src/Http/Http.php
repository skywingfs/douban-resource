<?php
/**
 * Author: skywing
 * Date: 2018/11/10
 * Time: 上午11:16
 * Describe:
 */

namespace Skywing\Douban\Http;

use GuzzleHttp\Client as HttpClient;
use Skywing\Douban\Exception\HttpException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Http.
 */
class Http
{
    /**
     * Http client
     * @var HttpClient
     */
    protected $client;

    /**
     * Guzzle client default settings.
     *
     * @var array
     */
    protected static $defaults = [];

    /**
     * Set GuzzleHttp\Client.
     * @param \GuzzleHttp\Client $client
     * @return Http
     */
    public function setClient(HttpClient $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Return GuzzleHttp\Client instance.
     * @return \GuzzleHttp\Client
     */
    public function getClient()
    {
        if (!($this->client instanceof HttpClient)) {
            $this->client = new HttpClient();
        }

        return $this->client;
    }

    /**
     * GET request.
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     * @throws HttpException
     */
    public function get($url, array $options = [])
    {
        return $this->request($url, 'GET', ['query' => $options]);
    }

    /**
     * POST request.
     * @param string $url
     * @param array|string $options
     * @return ResponseInterface
     * @throws HttpException
     */
    public function post($url, $options = [])
    {
        $key = is_array($options) ? 'form_params' : 'body';

        return $this->request($url, 'POST', [$key => $options]);
    }

    /**
     * Make a request.
     * @param string $url
     * @param string $method
     * @param array $options
     * @return ResponseInterface
     * @throws HttpException
     */
    public function request($url, $method = 'GET', $options = [])
    {
        $method = strtoupper($method);

        $options = array_merge(self::$defaults, $options);
        try {
            $response = $this->getClient()->request($method, $url, $options);
            return $response;
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * format url
     * @param $array
     * @return string
     */
    public function array_to_path($array)
    {
        $path = '';
        foreach ($array as $key => $value) {
            if ('' === trim($key)) {
                continue;
            }
            $path .= "{$key}/{$value}";
        }

        return $path;
    }
}