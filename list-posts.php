<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/13/2016
 * Time: 9:14 PM
 */
?>
<h1> List of Blog Posts</h1>
<?php
    foreach($posts as $post): ?>
        <h3> Post #<?php echo htmlspecialchars($post['id']); ?> </h3>
        <?php echo htmlspecialchars($post['content']); ?>
        <a href="http://localhost/experiments/posts.php?id=<?php echo htmlspecialchars($post['id']); ?>">Read More</a>
<hr/>
<?php endforeach; ?>
