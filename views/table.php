<?php require_once "./includes/header.php"  ?>
<?php require_once "../controllers/selectStudents.php"  ?>


<div class="overflow-x-auto">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
                    </label>
                </th>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Img</th>
                <th>majors_name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultStudents as $key => $value) :   ?>
                <?php
                echo "<pre>";
                print_r($value);
                echo "</pre>";

                ?>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <td>
                        <?= $value['id'] ?>
                    </td>
                    <td>
                        <?= $value['code'] ?>
                    </td>
                    <td>
                        <?= $value['name'] ?>
                    </td>
                    <th>
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="<?= "data:image/jpeg;base64," . $value['img'] ?>" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </th>
                    <th>
                        <?= $value['majors_name'] ?>
                    </th>
                    <th>
                        <a href="update.php?id=<?= $value['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="../controllers/delete.php?id=<?= $value['id'] ?>" class="btn btn-error" onclick="return confirm('ban co muon xoa id <?= $value['id'] ?>')">Delete</a>
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>



<?php require_once "./includes/footer.php"  ?>