<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * page-search
 *
 * @package custom
 */
  $this->need('header.php'); ?>
<article class="content-post content-page post page" role="main">
  <div class="content-post-title">
    <h1><?php $this->title() ?></h1>
  </div>
  <div class="content-post-body">
    <form method="post" action="/" role="search" style="max-width:500px;">
  <div class="input-group">
    <input class="form-input input-lg" type="text" placeholder="关键词" name="s" /> <button class="btn btn-primary input-group-btn btn-lg">搜索</button> 
  </div>
</form>
  </div>
  <div class="content-post-author">
    <div class="tile">
      <div class="tile-icon">
        <figure class="gavatar avatar-lg">
          <img src="https://secure.gravatar.com/avatar/c008349e25e407c537a94195980ae9d4" />
        </figure>
      </div>
      <div class="tile-content">
        <p class="tile-title"><strong>fengtalk</strong></p>
            <p class="tile-subtitle">生命不息，折腾不止，这里是首席打杂官笔记。</p>
      </div>
    </div>
  </div>
  <div class="content-post-comments">
  </div>
  <div class="doc_comments">
  <?php $this->need('comments.php'); ?>
  </div>
</article>
<?php $this->need('footer.php'); ?>