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
     *
     * @return string
     * 
     * @throws InvalidArgumentException
     */
    public static function string($value)
    {
        return (string) $value;
    }

}