<?php

declare(strict_types=1);

use App\Services\ImageKit;

if (! function_exists('generate_image')) {
    /**
     * Gera uma tag HTML `img` com o endereço do servidor ImageKit
     * 
     * @param string $path
     * @param string $attributes
     * @param string $sizes
     * @param array $transformations
     * @return string
     */
    function generate_image(string $path, string $attributes = '', string $sizes = 's,m,l,e', array $transformations = []): string
    {
        $sizes = explode(',', $sizes);
        $img_srcset = $img_sizes = [];
        foreach ($sizes as $value) {
            switch ($value) {
                case 'small':
                case 's':
                    $img_sizes[] = '(max-width: 414px) 414px';
                    $img_srcset[] = ImageKit::url($path, 414, $transformations);
                    break;
                case 'medium':
                case 'm':
                    $img_sizes[] = '(max-width: 768px) 768px';
                    $img_srcset[] = ImageKit::url($path, 768, $transformations);
                    break;
                case 'large':
                case 'l':
                    $img_sizes[] = '(max-width: 1024px) 1024px';
                    $img_srcset[] = ImageKit::url($path, 1024, $transformations);
                    break;
                case 'extra':
                case 'e':
                    $img_sizes[] = '(max-width: 1280px) 1280px';
                    $img_srcset[] = ImageKit::url($path, 1280, $transformations);
                    break;
            }
        }

        $img_srcset[] = $default_src = ImageKit::url(path: $path, transformations: $transformations);
        $img_sizes[] = '100vw';
        $img_sizes = ImageKit::parseSizes($img_sizes);
        $img_srcset = ImageKit::parseSrcset($img_srcset);

        return <<<HTML
            <img src="$default_src" $img_srcset $img_sizes $attributes />
            HTML;
    }
}