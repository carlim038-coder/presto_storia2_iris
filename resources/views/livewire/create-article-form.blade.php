<div>
    <!-- Messaggio di successo flash -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit.prevent="store" class="bg-white p-5 rounded shadow-sm border">
        
        <!-- Titolo -->
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Articolo</label>
            <input wire:model.blur="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Es. Bici da corsa">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Prezzo -->
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo (€)</label>
            <input wire:model.blur="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Es. 150.00">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Categoria -->
        <div class="mb-3">
            <label for="category_id" class="form-label">Categoria</label>
            <select wire:model.blur="category_id" class="form-select @error('category_id') is-invalid @enderror" id="category_id">
                <option value="">Seleziona categoria</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Descrizione -->
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea wire:model.blur="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="5" placeholder="Descrivi l'articolo in dettaglio..."></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Pulsante Invio -->
        <button type="submit" class="btn btn-primary w-100">Crea Articolo</button>
    </form>
</div>