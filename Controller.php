<?php
require_once 'Model.php';
require_once 'View.php';
class Controller {
    public function displayUserInfo() {
        $model = new Model();
        $data = $model->getData();
        $data = array_map('htmlspecialchars', $data);
        $view = new View();
        $view->render($data);
    }
}
?>
