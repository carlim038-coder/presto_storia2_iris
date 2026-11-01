<x-layout>
    <div class="container-fluid bg-body-tertiary py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Pubblica un articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <!-- Richiamiamo il componente Livewire per il form -->
                <livewire:create-article-form />
            </div>
        </div>
    </div>
</x-layout>