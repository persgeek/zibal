<?php

namespace PG\Zibal\Purchase;

class Response
{
    /**
     * Documentation for this.
     */
    protected $data;

    /**
     * Documentation for this.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Documentation for this.
     */
    public function fine()
    {
        return array_has($this->data, 'trackId');
    }

    /**
     * Documentation for this.
     */
    public function track()
    {
        return array_get($this->data, 'trackId');
    }
}
