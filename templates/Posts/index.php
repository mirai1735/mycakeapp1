<h1>post index</h1>

<form action="/posts" method="post">
  <input type="hidden" name="_csrfToken" autocomplete="off" value="<?= $this->request->getAttribute('csrfToken') ?>">
  <select name="sessions" id="">
    <option value="testA">testA</option>
    <option value="testB">testB</option>
    <option value="testC">testC</option>
  </select>
  <input type="submit" value="セッションに保存">
</form>

<div>
  <?php foreach($posts as $post): ?>
    <h3><?= $post->title; ?></h3>
    <p>概要</p>
    <p><?= $post->description; ?></p>
    <p>内容</p>
    <p><?= $post->body; ?></p>
    <hr>
  <?php endforeach; ?>

  
</div>