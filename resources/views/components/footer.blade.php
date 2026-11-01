<footer class="text-center text-lg-start bg-dark text-white pt-1">
    <div class="container p-4">
        <div class="row">
            <!-- Sezione 1 -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase fw-bold">PRESTO.IT</h5>
                <p>
                    Il portale di annunci di fiducia per comprare e vendere ogni tipo di oggetto in modo semplice e veloce.
                </p>
            </div>

            <!-- Sezione 2 -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase fw-bold">Link utili</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="{{ route('article.index') }}" class="text-white text-decoration-none">Tutti gli articoli</a>
                    </li>
                    @auth
                        <li>
                            <a href="{{ route('create.article') }}" class="text-white text-decoration-none">Pubblica un articolo</a>
                        </li>
                    @endauth
                </ul>
            </div>

            <!-- Sezione 3 -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase fw-bold">Contatti</h5>
                <ul class="list-unstyled">
                    <li><span class="text-white">Via Roma 123, Milano</span></li>
                    <li><span class="text-white">info@presto.it</span></li>
                    <li><span class="text-white">+39 02 1234567</span></li>
                </ul>
            </div>

            <!-- Sezione 4: Selezione Lingua (Extra) -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase fw-bold">Lingua</h5>
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center gap-3 mt-3">
                    <!-- Esempio di gestione lingua con rotte o form di localizzazione (es. Laravel Localization) -->
                    <a href="#" class="text-white text-decoration-none fw-bold border p-1 rounded">🇮🇹 IT</a>
                    <a href="#" class="text-white text-decoration-none fw-bold border p-1 rounded">🇬🇧 EN</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © {{ date('Y') }} Copyright:
        <a class="text-white text-decoration-none fw-bold" href="{{ route('homepage') }}">Presto.it</a>
    </div>
</footer>