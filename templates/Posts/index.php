<h1>post index</h1>
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