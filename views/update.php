<?php require_once "./includes/header.php"  ?>
<?php require_once "../controllers/selectMar.php"  ?>
<?php require_once "../controllers/selectEdit.php"  ?>

<!-- component -->
<form class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" action="../controllers/updateController.php" method="post" enctype="multipart/form-data">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">Edit</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <input type="text" placeholder="Code" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="id" value="<?= $selectEdit['id'] ?>">
                <label class="block font-semibold"> Code </label>
                <input type="text" placeholder="Code" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="code" value="<?= $selectEdit['code'] ?>">
                <label class="block font-semibold"> name </label>
                <input type="text" placeholder="name" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="name" value="<?= $selectEdit['name'] ?>">
                <label class="block font-semibold"> Img </label>
                <input type="file" class="file-input w-full max-w-xs" name="img" />

                <input type="text" class="file-input w-full max-w-xs hidden" name="imgSave" value="<?= $selectEdit['img'] ?>" />

                <div class="avatar">
                    <div class="w-24 rounded">
                        <img src="<?= "data:image/jpeg;base64," . $selectEdit['img'] ?>" />
                    </div>
                </div>

                <select class="select select-bordered w-full max-w-xs mt-2" name="mar_id">
                    <option disabled selected><?= $selectEdit['majors_name'] ?></option>
                    <?php foreach ($resultMajor as $key => $value) : ?>
                        <option value="<?= $value['majors_id'] ?>"><?= $value['majors_name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="flex justify-between items-baseline">
                    <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">Edit</button>
                </div>
            </div>

        </div>
    </div>
</form>


<?php require_once "./includes/footer.php"  ?>