<?php

declare(strict_types=1);

/*
 * This file is part of the broadway/uuid-generator package.
 *
 * (c) 2020 Broadway project
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Broadway\UuidGenerator\Converter;

interface BinaryUuidConverterInterface
{
    /**
     * @param string $uuid
     *
     * @return string
     */
    public static function fromString($uuid);

    /**
     * @param string $bytes
     *
     * @return string
     */
    public static function fromBytes($bytes);
}
