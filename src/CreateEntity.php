<?php
/**
 * Author: skywing
 * Date: 2018/11/9
 * Time: 下午5:39
 * Describe: Data Transform
 */

namespace Skywing\Douban;

interface CreateEntity
{
    public function createBook($params);
    public function createMovie($params);
}