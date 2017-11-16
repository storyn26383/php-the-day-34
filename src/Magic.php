<?php

namespace App;

use Countable;
use ArrayAccess;
use ArrayIterator;
use JsonSerializable;
use IteratorAggregate;

class Magic
{
    protected $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function __get($key)
    {
        return $this->data[$key] ?? null;
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

    public function __unset($key)
    {
        unset($this->data[$key]);
    }

    public function __call($method, $args)
    {
        return (new Amazing)->$method(...$args);
    }

    public static function __callStatic($method, $args)
    {
        return (new static)->$method(...$args);
    }

    public function __toString()
    {
        return json_encode($this->data);
    }

    public function __invoke()
    {
        return $this->data;
    }
}
