<?php
$text = fopen('webroot/images/carousel/carousel.txt', 'r');

while ($line = fgets($text))
{
  ?>
    <div class="item">
      <img src="/webroot/images/carousel/<?php echo $line ?>.jpg" alt="<?php echo $line ?>">
    </div>
  <?php
}

fclose($text);
?>
