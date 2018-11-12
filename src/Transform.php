<?php
/**
 * Author: skywing
 * Date: 2018/11/9
 * Time: 下午5:39
 * Describe: Data Transform
 */

namespace Skywing\Douban;

interface Transform
{
    public function toArray();

    public function toJSON();
}