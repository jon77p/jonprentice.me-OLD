<?php $title = 'Music'; $active = 'active'; include("template/header.php"); include("music/list.php");?>

<h1 class="text-center">Music Production</h1>
<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/32012413&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>
<hr>

<h1 class="text-center">Arrangements</h1>
<h2 class="text-center"><a href="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id1;?>" target="_blank"><?php echo $song1;?></a> by <?php echo $author1;?> - arranged by <a href="https://musescore.com/jon77p" target="_blank">Jon Prentice</a></h2>
<div class="embed-responsive embed-responsive-16by9">
<iframe width="100%" height="394" src="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id1;?>/embed" frameborder="0" allowfullscreen></iframe>
</div>
<hr>
<h2 class="text-center"><a href="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id2;?>" target="_blank"><?php echo $song2;?></a> by <?php echo $author2;?> - arranged by <a href="https://musescore.com/jon77p" target="_blank">Jon Prentice</a></h2>
<div class="embed-responsive embed-responsive-16by9">
<iframe width="100%" height="394" src="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id2;?>/embed" frameborder="0" allowfullscreen></iframe>
</div>
<hr>
<h2 class="text-center"><a href="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id3;?>" target="_blank"><?php echo $song3;?></a> by <?php echo $author3;?> - arranged by <a href="https://musescore.com/jon77p" target="_blank">Jon Prentice</a></h2>
<div class="embed-responsive embed-responsive-16by9">
<iframe width="100%" height="394" src="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id3;?>/embed" frameborder="0" allowfullscreen></iframe>
</div>
<hr>
<h2 class="text-center"><a href="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id4;?>" target="_blank"><?php echo $song4;?></a> by <?php echo $author4;?> -  arranged by <a href="https://musescore.com/jon77p" target="_blank">Jon Prentice</a></h2>
<div class="embed-responsive embed-responsive-16by9">
<iframe width="100%" height="394" src="https://musescore.com/<?php echo $user1;?>/scores/<?php echo $id4;?>/embed" frameborder="0" allowfullscreen></iframe>
</div>
<hr>
<h2 class="text-center"><a href="https://musescore.com/<?php echo $user2;?>/<?php echo $id5;?>" target="_blank"><?php echo $song5;?></a> by <?php echo $author5;?> -  arranged by <a href="https://musescore.com/jon77p" target="_blank">Jon Prentice</a></h2>
<div class="embed-responsive embed-responsive-16by9">
<iframe width="100%" height="394" src="https://musescore.com/<?php echo $user2;?>/<?php echo $id5;?>/embed" frameborder="0" allowfullscreen></iframe>
</div>
<hr>

<?php include("template/footer.php");?>
