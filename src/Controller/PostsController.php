<?php
namespace App\Controller;

class PostsController extends AppController {
  // public $autoRender = false;

  public function index() {
    $posts = $this->Posts->find('all');

    $this->set(compact('posts'));
  }

  public function view($id = null) {
    $post = $this->Posts->get($id);

    $this->set(compact('post'));
  }
}