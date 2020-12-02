<?php

namespace PG\Zibal\Complete;

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
        return array_has($this->data, 'paidAt');
    }
}
