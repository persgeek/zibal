<?php

use PG\Request\Request;

/**
 * Documentation for this.
 */
function zibal($request)
{
    return Request::instance()
        ->setAddress($request->address())
        ->setHeaders($request->headers())
        ->setParams($request->params())
        ->getResponse()
        ->asArray();
}
