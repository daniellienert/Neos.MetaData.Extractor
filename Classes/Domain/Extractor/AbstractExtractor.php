<?php
namespace Neos\MetaData\Extractor\Domain\Extractor;

/*
 * This file is part of the Neos.MetaData.Extractor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

abstract class AbstractExtractor implements ExtractorInterface
{
    /**
     * The media types this adapter can handle
     *
     * @var array
     */
    protected static $compatibleMediaTypes = [];

    /**
     * @inheritDoc
     */
    public static function isSuitableFor($mediaType)
    {
        $mainMediaType = substr($mediaType, 0, strpos($mediaType, '/'));

        return in_array('*', static::$compatibleMediaTypes, false)
            || in_array($mainMediaType . '/*', static::$compatibleMediaTypes, false)
            || in_array($mediaType, static::$compatibleMediaTypes, false);
    }
}
