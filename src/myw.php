<?php

/*
 * This file is part of the sunset-beat\myw package.
 *
 * (c) Marco Licciardi-Mues <info@sunset-beat.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace sunsetbeat\myw;

/**
 * Run CMS
 *
 * @since  1.0
 *
 * @author Marco Licciardi-Mues <info@sunset-beat.de>
 */
class myw
{
    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function string($value, $message = '')
    {
        if (!\is_string($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a string. Got: %s',
                static::typeToString($value)
            ));
        }
    }

