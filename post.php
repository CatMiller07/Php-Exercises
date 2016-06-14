<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/13/2016
 * Time: 8:58 PM
 */
class Posts{

        public  $db = '';
        public function __construct(){
          $this->db = new PDO("mysql:host=localhost;dbname=testposts","admin","admin");
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->index();

        }
        public function index(){
            $id = 0;
            $posts = array();
            $template = '';
            if (!empty($_GET['id'])) {
                $id = $_GET['id'];
            }
            try {
                if( !empty($id)){
                    $query = $this->db-prepare(
                            "select * from posts where id = ?"

                        );
                    $params = array($id);
                    $template = 'single-post.php';

                } else{
                    $query = $this->db->prepare("SELECT * FROM posts");
                    $params = array();
                    $template = 'list-posts.php';
                }
                $query->execute($params);
                for ($i= 0 ; $row = $query-fetch(); $i++){
                    $posts{} = array('id' => $row['id'], 'content'=>$row['content']);

                }

            } catch(PDOException $e){
                   echo $e->getMessage();
            }
            $query->closeCursor();
            $db = null;
            require_once($template);
        }
}

$posts = new Posts();
?>

