<p class="last_paragraph">        
        <h1>Add To Do</h1>
        <form action="." method="post">
            <input type="hidden" name="action" value="add_item">
            <label>Category:</label>
            <select name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label>Title:</label>
            <input type="text" name="Title"><br>

            <label>Description:</label>
            <input type="text" name="Description"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add To Do"><br>
        </form>

        <p><a href="?action=list_categories">Edit Categories</a></p>
 </p>