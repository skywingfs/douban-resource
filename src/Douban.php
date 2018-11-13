<?php
/**
 * Author: skywing
 * Date: 2018/11/10
 * Time: 下午5:24
 * Describe:
 */

namespace Skywing\Douban;

use Skywing\Douban\Exception\HttpException;
use Skywing\Douban\Exception\InvalidArgumentException;
use Skywing\Douban\Http\Http;
use Skywing\Douban\Model\Book;

class Douban extends AbstractDouban implements CreateEntity
{
    private $http;

    public function __construct()
    {
        $this->http = new Http();
    }

    public function getBook($isbn)
    {
        if (13 !== strlen($isbn) && 10 !== strlen($isbn)) {
            throw new InvalidArgumentException('Invalid isbn code(isbn10 or isbn13): ' . $isbn);
        }
        $params = ['isbn' => $isbn];
        try {
            $response = $this->http->getClient()->get(
                $this->bookRequestUrl . $this->http->array_to_path($params)
            );
            if (200 === $response->getStatusCode()) {
                return $this->createBook($response->getBody()->getContents());
            }
        } catch (\Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function getMovie()
    {
        // TODO: Implement getMovie() method.
    }


    public function createBook($params)
    {
        $params = \json_decode($params, true);
        if (!isset($params['title'])) {
            return null;
        }
        $book = new Book();

        return $book->setIsbn($params['isbn13'])
            ->setTitle($params['title'])
            ->setSubtitle($params['subtitle'])
            ->setAuthor($params['author'])
            ->setAuthorIntro($params['author_intro'])
            ->setPrice($params['price'])
            ->setCatalog($params['catalog'])
            ->setPublicationDate($params['pubdate'])
            ->setPublisher($params['publisher'])
            ->setSummary($params['summary'])
            ->setPages($params['pages'])
            ->setCover($params['images']['large'])
            ->setTags(array_column($params['tags'], 'name'))
            ->setAverage($params['rating']['average'])
            ->setNumRaters($params['rating']['numRaters']);
    }

    public function createMovie($params)
    {
        // TODO: Implement createMovie() method.
    }
}
