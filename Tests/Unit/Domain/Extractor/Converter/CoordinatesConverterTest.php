<?php
namespace Neos\MetaData\Extractor\Tests\Unit\Converter;

/*
 * This file is part of the Neos.MetaData.Extractor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\MetaData\Extractor\Converter\CoordinatesConverter;
use TYPO3\Flow\Tests\UnitTestCase;

class CoordinatesConverterTest extends UnitTestCase
{
    /**
     * @return array
     */
    public function gpsDataProvider()
    {
        return [
            'latitude' => [
                'dmsArray' => [
                    46,
                    39.5872,
                    0
                ],
                'cardinalDirectionReference' => 'S',
                'expected' => -46.659787
            ],
            'longitude' => [
                'dmsArray' => [
                    168,
                    50.8218,
                    0
                ],
                'cardinalDirectionReference' => 'E',
                'expected' => 168.84703
            ]
        ];
    }

    /**
     * @test
     * @dataProvider gpsDataProvider
     *
     * @param array $dmsArray
     * @param string $cardinalDirectionReference
     * @param float $expected
     */
    public function convertDmsToDd($dmsArray, $cardinalDirectionReference, $expected)
    {
        $actual = CoordinatesConverter::convertDmsToDd($dmsArray, $cardinalDirectionReference);
        $this->assertEquals($expected, $actual);
    }
}
