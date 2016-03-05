<?php

/**
 * Класс GalleryImage - модель для
 */
class GalleryImage
{
    public static function getImage($id)
    {
        // Путь к папке с изображениями
        $path = '/template/images/gallery/';

        // Путь к изображению
        $pathToImage = $path . $id . '.jpg';
        return $pathToImage;
    }
}