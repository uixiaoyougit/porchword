<?php
include_once (REALPATH."/app/library/BaseController.php");
class IndexController extends BaseController
{

    public function indexAction()
    {
        echo phpinfo();
        $this ->view ->disable();
        $this ->log('goto index');
    }
    public function personAction(){
    	$this ->view->start()->render('index', 'person')->finish();
        $this ->log('-goto person-');
    }

}
?>