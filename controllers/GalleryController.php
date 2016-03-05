<?php
/**
 * Контроллер для раздела "ГАЛЕРЕЯ"
 */
class GalleryController
{
    public function actionIndex($page = 1)
    {
        $user = UserCheck::fromSession();

        $result = null;

        if (isset($_POST['submit'])) {
            $_POST['username'] = $user->name;
            $imageData = $_POST;
            unset($imageData['submit']);

            $errors = null;

            //Проверки правильности заполнения полей формы


            if ($errors == null) {
                // Загрузка изображения в БД
                $result = GalleryDb::create($imageData);
            }

            $imageId = $result->id;

            // Перемещение изображений в папку и присвоение названия по ID
            if ($imageId) {
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/gallery/{$imageId}.jpg");
                }
            }
        }

        // Определение значений переменных для пагинации и создание обьекта Pagination
        $currentPage = !empty($page) ? (int)$page : 1;
        $perPage = 3;
        $totalCount = GalleryDb::count();
        $pagination = new Pagination($currentPage, $perPage, $totalCount);

        // Вывод изображений с БД для отображения на странице (по 3 на странице)
        $image = GalleryDb::all(array('order' => 'id desc', 'limit' => $perPage, 'offset' => $pagination->offset()));

        require_once(ROOT . '/views/gallery/index.php');
        return true;
    }

    public function actionView($id)
    {
        // Поиск изображения в БД по ID
        $image = GalleryDb::find($id);

        $user = UserCheck::fromSession();

        $result = null;

        if (isset($_POST['submit'])) {
            $_POST['imageId'] = $id;
            $_POST['username'] = $user->name;
            $commentData = $_POST;
            unset($commentData['submit']);

            $errors = null;

            //Проверки правильности заполнения полей формы


            if ($errors == null) {
                // Загрузка изображения в БД
                $result = CommentGallery::create($commentData);
            }
        }

        $comments = CommentGallery::all(array('conditions' => array('imageId = ?', $id)));

        require_once(ROOT . '/views/gallery/view.php');
        return true;
    }
}