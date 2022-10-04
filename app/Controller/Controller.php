<?php
class Controller {

    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);
    }

    function error() {
        http_response_code(404);
        $this->smarty->display("app/web/template/error.tpl");
    }
}