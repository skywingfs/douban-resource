<?php
/**
 * Author: skywing
 * Date: 2018/11/10
 * Time: 下午5:24
 * Describe:
 */

namespace Skywing\Douban;

abstract class AbstractDouban
{
    protected $bookRequestUrl = "https://api.douban.com/v2/book/";

    public abstract function getBook($isbn);

    public abstract function getMovie();
}