<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/13/2016
 * Time: 7:08 PM
 */

if (!empty($_POST['data'])) {
    echo 'Form has been submitted';
// code to process data from form
}
?>
    <html>
    <body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <input type="text" name="field1" type="text" placeholder="Field1"/>
        <button type="submit">submit</button>
    </form>
    </body>
    </html>