<?php
/**
 * Application level Controller
 *
 *
 * PHP 5
 *
 * @package       image.Controller
 */
class ImagesController extends AppController {
    public $helpers = array('Html', 'Form');


    public function index() {
        $this->set('images', $this->Image->find('all'));
    }
}
?>