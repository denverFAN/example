<?php
/**
 * Контроллер для раздела "БЛОГ"
 */
class BlogController
{
    public function actionAddNews()
    {
        $result = null;

        if (isset($_POST['submit'])) {
            $newsData = $_POST;
            unset($newsData['submit']);

            $errors = null;

            //Проверки правильности заполнения полей формы


            if ($errors == null) {
                // Загрузка изображения в БД
                $result = BlogDb::create($newsData);
            }

            $newsId = $result->id;

            // Перемещение изображений в папку и присвоение названия по ID
            if ($newsId) {
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/blog/{$newsId}.jpg");
                }
            }
        }

        require_once(ROOT . '/views/blog/addnews.php');
        return true;
    }

    public function actionIndex($page = 1)
    {
        // Определение значений переменных для пагинации и создание обьекта Pagination
        $currentPage = !empty($page) ? (int)$page : 1;
        $perPage = 2;
        $totalCount = BlogDb::count();
        $pagination = new Pagination($currentPage, $perPage, $totalCount);

        // Вывод новостей с БД для отображения на странице (по 2 на странице)
        $blog = BlogDb::all(array('order' => 'id desc', 'limit' => $perPage, 'offset' => $pagination->offset()));

        require_once(ROOT . '/views/blog/index.php');
        return true;
    }

    public function actionPost($id)
    {
        // Поиск новости в БД по ID
        $news = BlogDb::find($id);

        $user = UserCheck::fromSession();

        $result = null;

        if (isset($_POST['submit'])) {
            $_POST['newsId'] = $id;
            $_POST['username'] = $user->name;
            $commentData = $_POST;
            unset($commentData['submit']);

            $errors = null;

            //Проверки правильности заполнения полей формы


            if ($errors == null) {
                // Загрузка комментария в БД
                $result = CommentBlog::create($commentData);
            }
        }

        $comments = CommentBlog::all(array('conditions' => array('newsId = ?', $id)));

        require_once(ROOT . '/views/blog/post.php');
        return true;
    }
}