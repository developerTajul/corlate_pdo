<?php 
namespace App\Controllers;

use App\Base\Controller;
use App\Models\CategoryModel;

class CategoryController extends Controller{

    public function show_all(){
        $stmt = $this->connect()->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->fetchAll();
    }




    /**
     * category status
     */
    public function manage_category_status( $id='', $status='' ):void
    {
        $current_id = $id;
        $status = $status == 1 ? 0 : 1;

        $stmt = $this->connect()->prepare("UPDATE categories SET status=:status WHERE id=:current_id");
        $stmt->bindParam(':current_id', $current_id, \PDO::PARAM_INT);
        $stmt->bindParam(':status', $status, \PDO::PARAM_INT);
        $stmt->execute();
        header("Location: categories.php");
    }


    /**
     * Category Posts
     */
    public function show_category_posts( $id ):mixed
    {
     $stmt = $this->connect()->prepare("SELECT * FROM categories WHERE id={$id}");
     $stmt->execute();
     return $stmt->fetch();
    }
    
    /**
     * update category
     */
    public function update_category( $id, $data ){
        $current_id = $id;
        $name       = trim($data['update_name']);
        $slug       = strtolower(implode('-', explode(' ', trim($name))));
        $content    = trim( $data['update_content'] );
        
        /**
         * Category Thumbnail
         */
        $filename = $_FILES['update_thumbnail']['name'];
        $file_tmp_name = $_FILES['update_thumbnail']['tmp_name'];
        move_uploaded_file($file_tmp_name, '../uploads/categories/'.$filename);    
        


        if( $filename != "" ){
            /**
             * delete image from uploads folder
             */
            $stmt_replace_img = $this->connect()->prepare("SELECT * FROM categories WHERE id={$current_id}");
            $stmt_replace_img->execute();
            $replace_cat_image = $stmt_replace_img->fetch();

            unlink('../uploads/categories/'.$replace_cat_image['thumbnail']);


            $update_sql = $this->connect()->prepare("UPDATE categories SET name = :name, slug = :slug, content = :content, thumbnail= :filename WHERE id=:current_id");
            $update_sql->bindParam(':name', $name, \PDO::PARAM_STR);
            $update_sql->bindParam(':slug', $slug, \PDO::PARAM_STR);
            $update_sql->bindParam(':content', $content, \PDO::PARAM_STR);
            $update_sql->bindParam(':filename', $filename, \PDO::PARAM_STR);
            $update_sql->bindParam(':current_id', $current_id, \PDO::PARAM_STR);
            $update_sql->execute();
            
        }else{
            $update_sql = $this->connect()->prepare("UPDATE categories SET name = :name, slug = :slug, content = :content WHERE id=:current_id");
            $update_sql->bindParam(':name', $name, \PDO::PARAM_STR);
            $update_sql->bindParam(':slug', $slug, \PDO::PARAM_STR);
            $update_sql->bindParam(':content', $content, \PDO::PARAM_STR);
            $update_sql->bindParam(':current_id', $current_id, \PDO::PARAM_STR);
            $update_sql->execute();
        }


        header("location: categories.php");

    }


    /**
     * add Category
     */
    public function add_category( $data ):void
    {
       $name = $data['name'];
       $slug = strtolower(implode('-', explode(' ', trim($name))));
       $content = $data['content'];

       /**
         * Category Thumbnail
         */
        $filename = $_FILES['thumbnail']['name'];
        $file_tmp_name = $_FILES['thumbnail']['tmp_name'];
        move_uploaded_file($file_tmp_name, '../uploads/categories/'.$filename);


        /**
         * check category exists
         */
        $stmt = $this->connect()->prepare("SELECT count(*) FROM categories WHERE name=:name");
        $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
        $stmt->execute();
        $category_count = $stmt->fetchColumn();

        if( $category_count < 1 ){

            $catggory = $this->connect()->prepare("INSERT INTO categories (name, slug, content, thumbnail) VALUES(:name, :slug, :content, :thumbnail)");
            $catggory->bindParam(':name', $name, \PDO::PARAM_STR);
            $catggory->bindParam(':slug', $slug, \PDO::PARAM_STR);
            $catggory->bindParam(':content', $content, \PDO::PARAM_STR);
            $catggory->bindParam(':thumbnail', $filename, \PDO::PARAM_STR);
            $catggory->execute();
            header("Location: categories.php");

        }else{
            $this->category_already_taken = "Category already taken";
        }
    }


    /**
     * Delete Category Item
     *
     * @param [type] $id
     * @return void
     */
    public function destroy( $id ):void
    {
        $delete_id = $id;
        /**
         * delete image from uploads folder
         */
        $stmt_img = $this->connect()->prepare("SELECT * FROM categories WHERE id={$delete_id}");
        $stmt_img->execute();
        $delete_cat = $stmt_img->fetch();

        /**
         * Delete Category Item
         */
        $stmt = $this->connect()->prepare("DELETE FROM categories WHERE id=:id");
        $stmt->bindParam(':id', $delete_id, \PDO::PARAM_INT);
        $stmt->execute();

        unlink('../uploads/categories/'.$delete_cat['thumbnail']);
        header("Location: categories.php");
    }

}