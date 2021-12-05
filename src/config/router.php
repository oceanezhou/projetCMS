<?php

isset($path) {
    //Frontend
    case null:
        $controller = new \Controller\FrontendController()
        $controller->index();
        break;

    case 'show':
        $controller = new \Controller\FrontendController()
        $controller->show($_GET['articleId']);
        break;

    case 'admin':
        $controller = new \Controller\AdminController()
        $controller->index();
        break;

    case 'addArticle':
        $controller = new \Controller\ArticleController()
        $controller->addArticle();
        break;

    case 'deleteArticle':
        $controller = new \Controller\ArticleController()
        $controller->deleteArticle();
        break;
}
?>