<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/13/2016
 * Time: 9:15 PM
 */

foreach($posts as $post): ?>
    <h1>Post #<?php echo htmlspecialchars($post['id']); ?></h1>
    <hr/>
    <?php echo htmlspecialchars($post['content']); ?>
    <a href="http://localhost/experiments/posts.php">Back to Post List</a>
<?php endforeach; ?>


