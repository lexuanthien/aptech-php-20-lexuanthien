<?php
echo "<ul>";
foreach ($data[posts] as $post):  ?>
	<li>
        <a href="index.php?controller=posts&method=showPost&id=<?php echo $post->id; ?>">
            <?php echo $post->title; ?>
        </a>
	</li>

																	<?php
endforeach;
echo "</ul>";
?>
