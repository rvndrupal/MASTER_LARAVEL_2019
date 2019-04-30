<?php

namespace App\Helpers;


use App\Gallery;

class Helper
{
    /**
     * Format bytes to kb, mb, gb, tb
     *
     * @param  integer $size
     * @param  integer $precision
     * @return integer
     */
    public static function formatBytes($size, $precision = 2)
    {
        if ($size > 0) {
            $size = (int) $size;
            $base = log($size) / log(1024);
            $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');

            return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
        } else {
            return $size;
        }
    }

    /**
     * @param Gallery $gallery
     */
    public static function removeImages(Gallery $gallery)
    {
        foreach (config('constants.IMAGE_SIZES') as $imageSize)
        {
            \File::delete(sprintf('%s/%s/%s', 'uploads', $imageSize[2], $gallery->image));
        }
        \File::delete(sprintf('%s/%s', 'uploads/gallery', $gallery->image));
    }
}