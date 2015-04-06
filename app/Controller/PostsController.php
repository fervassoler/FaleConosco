<?php
/**
 * Created by PhpStorm.
 * User: Fernanda
 * Date: 27/03/2015
 * Time: 22:31
 */
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $name = 'Posts';

    public function index() {
        $this->set('posts', $this->Post->find('all', array('order'=>'created DESC')));
    }

    public function view($id = null) {
        $this->Post->save(['id'=>$id,'read'=>1]);
        $this->Post->id = $id;
        $post = $this->Post->read();
        $this->set('post', $post);

    }

    public function add() {
        if ($this->request->is('post')) {
            $data = $this->request->data;

            $filename = $data['Post']['file']['name'];

            $dot_pos = strripos($filename, '.');

            $filename = Inflector::slug(substr($filename, 0, $dot_pos)).substr($filename, $dot_pos);

            $data['Post']['file'] = $filename;

            if ($this->Post->save($data)) {
                move_uploaded_file($this->data['Post']['file']['tmp_name'], WWW_ROOT . 'files' . DS . $data['Post']['file']);
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
}