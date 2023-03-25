<?php include 'header.php'; ?> 

<main>
    <form action="." method="get">
        <input type="hidden" name="action" value="list_items">
        <select name="make_id">
            <option value="">Show All</option>
            <?php foreach ($makes as $make) : ?>
                <option value="<?php echo $make['ID']?>" <?php echo $make['ID'] == $make_id? 'selected': ''?>><?php echo $make['Make']?></option>
            <?php endforeach; ?>
        </select>
        <select name="type_id">
            <option value="">Show All</option>
            <?php foreach ($types as $type) : ?>
                <option value="<?php echo $type['ID']?>" <?php echo $type['ID'] == $type_id? 'selected': ''?>><?php echo $type['Type']?></option>
            <?php endforeach; ?>
        </select>
        <select name="class_id">
            <option value="">Show All</option>
            <?php foreach ($classes as $class) : ?>
                <option value="<?php echo $class['ID']?>" <?php echo $class['ID'] == $class_id? 'selected': ''?>><?php echo $class['class']?></option>
            <?php endforeach; ?>
        </select>
        <label>Sort By:</label>
        <input type="radio" name="order_by" value="price" <?php echo $order_by == 'price' ? 'checked': ''?> >Price</input>
        <input type="radio" name="order_by" value="year" <?php echo $order_by == 'year' ? 'checked': ''?> >Year</input>
        <label>&nbsp;</label>
        <input type="submit" value="Submit"><br>
    </form>
<section>
        <table>
            <tr>
                <th>Year</th>
                <th>Model</th>
                <th>Price</th>
                <th>Make</th>
                <th>Type</th>
                <th>Class</th>
            </tr>

            <?php foreach ($items as $item) : ?>
            <tr>
                <td><?php echo $item['year']; ?></td>
                <td><?php echo $item['model']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $item['Make']; ?></td>
                <td><?php echo $item['Type']; ?></td>
                <td><?php echo $item['Class']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

</section> </main> <?php include 'footer.php'; ?> 