<?php
$username=$_SESSION['username'];
$b = new Bookmark();
$bookmaks=$b->getBookmark($username);
?>
<div class="container">
 <div class="card">
  <div class="weui-panel">
    <div class="weui-panel__bd">


        <?php if (empty($bookmaks)) {
          echo '<div class="weui-media-box weui-media-box_text empty">';
          echo '您还没有收藏网址，<a href="about.php#usage">查看如何使用……</a>';
          echo '</div>';
        }  ?>



<?php foreach($bookmaks as $data){ ?>
      <div class="weui-media-box weui-media-box_text">
        <h4 class="weui-media-box__title"><a href="<?php echo $data['URL']; ?>" target="_blank"><?php echo $data["TITLE"]; ?></a></h4>
        <?php if (!empty($data["DESCRIPTION"])): ?>
          <p class="weui-media-box__desc"><?php echo $data["DESCRIPTION"]; ?></p>
        <?php endif; ?>
        <ul class="weui-media-box__info">
          <li class="weui-media-box__info__meta"><?php echo $data["TIME"]; ?></li>
          <li class="weui-media-box__info__meta"><?php echo preEmail($data["AUTHOR"]); ?></li>
          <!-- <li class="weui-media-box__info__meta weui-media-box__info__meta_extra"></li> -->
        </ul>
      </div>
<?php } ?>

    </div>
  </div>
 </div>
</div>
