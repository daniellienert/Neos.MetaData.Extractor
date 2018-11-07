[![StyleCI](https://styleci.io/repos/56771923/shield?branch=master)](https://styleci.io/repos/56771923)
[![Build Status](https://travis-ci.org/neos/metadata-extractor.svg?branch=master)](https://travis-ci.org/neos/metadata-extractor)
[![Latest Stable Version](https://poser.pugx.org/neos/metadata-extractor/v/stable)](https://packagist.org/packages/neos/metadata-extractor)
[![Total Downloads](https://poser.pugx.org/neos/metadata-extractor/downloads)](https://packagist.org/packages/neos/metadata-extractor)
[![License](https://poser.pugx.org/neos/metadata-extractor/license)](https://packagist.org/packages/neos/metadata-extractor)

# Neos.MetaData.Extractor Package
This package handles extraction of meta data from assets. 

The package provides the `ExtractorInterface`.
With `isSuitableFor()` the implementing classes decide if they will be used for a specific resource.
The `AbstractExtractor` implements a check by media type. Just extend and set `$compatibleMediaTypes` to the possible
media type range(s). Returned DTOs are added to a collection and forwarded to the central `MetaDataManger` of the
package *Neos.MetaData*.

## Extractors
The `ExtractionManager` itself generates the `Asset` DTO for every valid Asset. 

### `ExifExtractor` ([EXIF](http://www.exif.org/))

#### Supported Media Types
* image/jpeg
* image/tiff
* video/jpeg

#### Generated DTOs
* EXIF

### `IptcIimExtractor` ([IPTC IIM](https://iptc.org/standards/iim/))

#### Supported Media Types
* application/octet-stream
* application/x-shockwave-flash
* image/bmp
* image/gif
* image/iff
* image/jp2
* image/jpeg
* image/png
* image/psd
* image/tiff
* image/vnd.microsoft.icon
* image/vnd.wap.wbmp
* image/xbm

#### Generated DTOs
* IPTC
