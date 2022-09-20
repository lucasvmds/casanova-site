<?php

declare(strict_types=1);

namespace App\Services;

use ImageKit\ImageKit as Image;

class ImageKit
{
    public static function url(string $path, int $size = 0, array $transformations = []): string
    {
        if ($size > 0) $transformations[]['width'] = $size;
        $image_url = app(Image::class)->url([
            'path' => $path,
            'transformation' => $transformations,
        ]);
        return $size > 0 ? $image_url." {$size}w" : $image_url;
    }

    private static function parse(array $items, string $attribute):  string
    {
        return count($items) > 0 ? 
            $attribute.'="'.implode(',', $items).'"' :
            '';
    }

    public static function parseSizes(array $sizes): string
    {
        return self::parse($sizes, 'sizes');
    }

    public static function parseSrcset(array $srcset): string
    {
        return self::parse($srcset, 'srcset');
    }
}