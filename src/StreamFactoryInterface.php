<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\StreamInterface;

interface StreamFactoryInterface
{
    /**
     * Create a new stream from a resource or a string.
     *
     * If the argument is a resource, it MUST be readable and SHOULD be seekable. It MAY be writable.
     * If the argument is a string, a temporary resource will be created that is writable and seekable.
     * 
     * If the arugment is a string it will be interpided as the content of the stream. File names or 
     * file paths are not supported. 
     *
     * @param string|resource $resource
     *
     * @return StreamInterface
     */
    public function createStream($resource);
}
