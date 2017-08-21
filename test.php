<?php
require('common.php');

//$email = 'hahaxo@126.com'; $emailArr = explode("@",$email); echo $emailArr[0];
$email = '1212hahaxocom';
$p=preEmails($email);
echo $p;

//参数：完整的Email地址，返回@前的字符串；
function preEmails($email){
$preEmail = explode("@",$email);
return $preEmail[0];
}




// index backup core Logic
if (isset($_GET['username'])) {
  $username=$_GET['username'];
}else {
  $username='*';
}
$b = new Bookmark();
$bookmaks=$b->getBookmark($username);


<div class="container">
 <div class="card">
  <div class="weui-panel">
    <div class="weui-panel__bd">
<?php foreach($bookmaks as $data){ ?>
      <div class="weui-media-box weui-media-box_text">
        <h4 class="weui-media-box__title"><a href="<?php echo $data['URL']; ?>" target="_blank"><?php echo $data["TITLE"]; ?></a></h4>
        <p class="weui-media-box__desc"><?php echo $data["DESCRIPTION"]; ?></p>
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
