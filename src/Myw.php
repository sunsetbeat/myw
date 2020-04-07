<?php

/*
 * This file is part of the sunset-beat\myw package.
 *
 * (c) Marco Licciardi-Mues <info@sunset-beat.de>
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
