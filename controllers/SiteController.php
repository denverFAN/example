<?php
/**
 * Контроллер для Главной страницы
 */
class SiteController
{
    public function actionIndex()
    {
        $news = BlogDb::last();
        $image = GalleryDb::all(array('order' => 'id desc', 'limit' => 2));

        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionContacts()
    {
        require_once(ROOT . '/views/site/contacts.php');
        return true;
    }
}