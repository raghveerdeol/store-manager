
<div class="bg-white border border-4 rounded-lg shadow relative m-10">
    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Create <?= $title ?>
        </h3>
    </div>

    <div class="p-6 space-y-6">
        <form id="createForm" method="POST">
            <div class="grid grid-cols-6 gap-6">
                <?php foreach($formData as $input) { ?>
                <div class="col-span-6 sm:col-span-<?= $input['cols'] ?>">
                    <label for="<?= $input['name'] ?>" class="text-sm font-medium text-gray-900 block mb-2"><?= $input['label'] ?></label>
                    <input type="text" name="<?= $input['name'] ?>" id="<?= $input['name'] ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="<?= $input['placeholder'] ?>" required="<?= $input['required'] ?>">
                    <?php if(isset($error['name']) && $error['name'] === $input['name']) { ?>
                        <p><?= $error['error'] ?></p>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="mt-6 p-6 border-t border-gray-200 rounded-b text-end">
                <button
                    class="text-white bg-blue-500 hover:bg-blue-700 hover:cursor-pointer font-medium rounded-md text-sm px-5 py-2.5 text-center"
                    name="submit"
                    type="submit"
                >Save</button>
            </div>
        </form>
    </div>
</div>