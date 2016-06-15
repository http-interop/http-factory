<?php

namespace Psr\Http\Factory;

use Psr\Http\Message\StreamInterface;

interface StreamFactoryInterface
{
    /**
     * Create a new stream with no content.
     *
     * The stream will be writable and seekable.
     *
     * @return StreamInterface
     */
    public function createStream();

    /**
     * Create a new stream from a callback.
     *
     * The stream will be read-only and not seekable.
     *
     * @param callable $callback
     *
     * @return StreamInterface
     */
    public function createStreamFromCallback(callable $callback);

    /**
     * Create a new stream from a resource.
     *
     * @param resource $body
     *
     * @return StreamInterface
     *
     * @throws \InvalidArgumentException
     *  If a passed resource is not readable.
     */
    public function createStreamFromResource($body);

    /**
     * Create a new stream from a string.
     *
     * A temporary resource will be created with the content of the string.
     * The resource will be writable and seekable.
     *
     * @param string $body
     *
     * @return StreamInterface
     */
    public function createStreamFromString($body);
}
