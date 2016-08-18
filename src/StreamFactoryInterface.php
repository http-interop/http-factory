<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\StreamInterface;

interface StreamFactoryInterface
{
    /**
     * Create a new stream from a resource or a string.
     *
     * If argument is resource, it MUST be readable and SHOULD be seekable. It MAY be writable.
     *
     * @param string|resource $resource
     *
     * @return StreamInterface
     */
    public function createStream($resource);
}
