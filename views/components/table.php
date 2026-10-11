

	<div class="container mx-auto px-4 sm:px-8">
		<div class="py-8">
			<div class="flex flex-row justify-between w-full bg-blue-100 shadow px-4 sm:px-8 py-4 rounded-t-md">
				<h2 class="text-2xl leading-tight">
					Users
				</h2>
				<div class="text-end">
					<form class="flex w-full max-w-sm space-x-3">
						<div class=" relative ">
							<input type="text" id="&quot;form-subscribe-Filter" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent" placeholder="Search Here" />
						</div>
						<button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-black rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
							Search
						</button>
					</form>
				</div>
			</div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-b-md overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
                                <?php foreach($columns as $column) { ?>
                                    <th scope="col" class="px-5 py-3 bg-blue-100 border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                        <?= str_replace('_', ' ', $column) ?>
                                    </th>
                                <?php } ?>
                                <th scope="col" class="px-5 py-3 bg-blue-100 border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Actions
                                </th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach($elements as $index => $element) { ?>
                                <tr>
                                    <?php foreach($columns as $column) { ?>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <?= $element[$column] ?>
                                            </p>
                                        </td>
                                    <?php } ?>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <?php foreach ($actions as $key => $action) { ?>
                                            <?php if($action === 'view') { ?>
                                                <a 
                                                    href="users/view?id=<?= $element['id'] ?>"
                                                    class="rounded-md py-2 px-4 bg-blue-400" 
                                                >view</a>
                                            <?php } ?>
                                            <?php if($action === 'create') { ?>
                                                <a 
                                                    href="users/create"
                                                    class="rounded-md py-2 px-4 bg-red-400"
                                                >create</a>
                                            <?php } ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
						</tbody>
					</table>
					<div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-end xs:justify-between">
						<div class="flex items-center">
							<button type="button" class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
								<svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
									<path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
									</path>
								</svg>
							</button>
							<button type="button" class="w-full px-4 py-2 border-t border-b border-r text-base text-indigo-500 bg-white hover:bg-gray-100 ">
								1
							</button>
							<button type="button" class="w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
								<svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
									<path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
									</path>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>