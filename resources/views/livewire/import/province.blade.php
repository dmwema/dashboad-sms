<form action="" class="pb-3" method="post" wire:submit.prevent='save' enctype="multipart/form-data">
    @csrf
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="file">
                Fichier
            </label>
        </div>
        <div class="md:w-2/3">
            <input required
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                id="file" type="file" wire:model.defer='file'>
        </div>
    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
            <button
                class="shadow bg-primary hover:bg-primary-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit">
                <div wire:loading wire:target="save" class="spinner-border spinner-border-sm" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                Importer
            </button>
        </div>
    </div>
</form>
