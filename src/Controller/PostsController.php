<?php
namespace App\Controller;

class PostsController extends AppController {
  // public $autoRender = false;

  public function index() {
    $posts = $this->Posts->find('all');

    if($this->request->is('post')) {
      $title = $this->request->getData('sessions');

      $session = $this->getRequest()->getSession();

      $session->write('session', $title);

      $session->read('session');
      
      $this->set(compact('posts'));
      return $this->redirect(['controller' => 'Posts', 'action' => 'view']);
    }

    $this->set(compact('posts'));
  }

  public function view() {


    $session = $this->getRequest()->getSession();
    

    dd($session->read('session'));

    $this->set(compact('post'));
  }
}