<?php
/**
 * Author: skywing
 * Date: 2018/11/9
 * Time: 下午5:32
 * Describe: Book Entity
 */

namespace Skywing\Douban\Model;

use Skywing\Douban\Transform;

class Book implements Transform
{
    /**
     * @var string book's isbn13 code
     */
    private $isbn;

    /**
     * @var string book's title
     */
    private $title;

    /**
     * @var string book's subtitle
     */
    private $subtitle;

    /**
     * @var array book's authors
     */
    private $author;

    /**
     * @var string authors' introduction
     */
    private $authorIntro;

    /**
     * @var string book's publication date
     */
    private $publicationDate;

    /**
     * @var string book's publisher
     */
    private $publisher;

    /**
     * @var array book's tags
     */
    private $tags;

    /**
     * @var string book's catalog
     */
    private $catalog;

    /**
     * @var string book's summary
     */
    private $summary;

    /**
     * @var string book's price
     */
    private $price;

    /**
     * @var string book's numRaters
     */
    private $numRaters;

    /**
     * @var string book's average
     */
    private $average;

    /**
     * @var string book's cover (image url)
     */
    private $cover;

    /**
     * @var string book's pages
     */
    private $pages;

    /**
     * @return string
     */
    public function getPages(): string
    {
        return $this->pages;
    }

    /**
     * @param string $pages
     * @return $this
     */
    public function setPages(string $pages)
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumRaters(): string
    {
        return $this->numRaters;
    }

    /**
     * @param string $numRaters
     * @return $this
     */
    public function setNumRaters(string $numRaters)
    {
        $this->numRaters = $numRaters;

        return $this;
    }

    /**
     * @return string
     */
    public function getAverage(): string
    {
        return $this->average;
    }

    /**
     * @param string $average
     * @return $this
     */
    public function setAverage(string $average)
    {
        $this->average = $average;

        return $this;
    }

    /**
     * @return string
     */
    public function getCover(): string
    {
        return $this->cover;
    }

    /**
     * @param string $cover
     *
     * @return $this
     */
    public function setCover(string $cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     *
     * @return $this
     */
    public function setIsbn(string $isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * @param string $subtitle
     *
     * @return $this
     */
    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return array
     */
    public function getAuthor(): array
    {
        return $this->author;
    }

    /**
     * @param array $author
     *
     * @return $this
     */
    public function setAuthor(array $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorIntro(): string
    {
        return $this->authorIntro;
    }

    /**
     * @param string $authorIntro
     *
     * @return $this
     */
    public function setAuthorIntro(string $authorIntro)
    {
        $this->authorIntro = $authorIntro;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublicationDate(): string
    {
        return $this->publicationDate;
    }

    /**
     * @param string $publicationDate
     *
     * @return $this
     */
    public function setPublicationDate(string $publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublisher(): string
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     *
     * @return $this
     */
    public function setPublisher(string $publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return string
     */
    public function getCatalog(): string
    {
        return $this->catalog;
    }

    /**
     * @param string $catalog
     *
     * @return $this
     */
    public function setCatalog(string $catalog)
    {
        $this->catalog = $catalog;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return $this
     */
    public function setSummary(string $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     *
     * @return $this
     */
    public function setPrice(string $price)
    {
        $this->price = $price;

        return $this;
    }


    /**
     * get attributes with array format.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'isbn' => $this->isbn,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'price' => $this->price,
            'author' => $this->author,
            'author_intro' => $this->authorIntro,
            'publication_date' => $this->publicationDate,
            'publisher' => $this->publisher,
            'tags' => $this->tags,
            'catalog' => $this->catalog,
            'summary' => $this->summary,
            'numRaters' => $this->numRaters,
            'pages' => $this->pages,
            'average' => $this->average,
            'cover' => $this->cover

        ];
    }

    /**
     * get attributes with json format.
     *
     * @return string
     */
    public function toJSON(): string
    {
        return \json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
