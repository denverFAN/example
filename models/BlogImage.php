<?php

/**
 * Класс BlogImage - модель для
 */
class BlogImage
{
    public static function getImage($id)
    {
        // Путь к папке с изображениями
        $path = '/template/images/blog/';

        // Путь к изображению
        $pathToImage = $path . $id . '.jpg';
        return $pathToImage;
    }
}