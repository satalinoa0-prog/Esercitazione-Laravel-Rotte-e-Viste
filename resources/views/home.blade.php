<x-layout>
    <x-slot:title>Homepage</x-slot:title>

    <section class="hero d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-3 fw-bold">Dolce Forno</h1>
            <p class="lead mb-4">Pasticceria artigianale dal 1985: ogni giorno impasti freschi, ingredienti genuini e tanta passione.</p>
            <a href="{{ route('servizi') }}" class="btn btn-brand btn-lg me-2">Scopri i servizi</a>
            <a href="{{ route('chi-siamo') }}" class="btn btn-outline-light btn-lg">Chi siamo</a>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center text-brand mb-4">I nostri best seller</h2>
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card card-service h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Cornetti">
                    <div class="card-body">
                        <h5 class="card-title">Cornetti sfogliati</h5>
                        <p class="card-text">Burro francese e lievitazione di 24 ore per una sfoglia leggera e fragrante.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-service h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Torta al cioccolato">
                    <div class="card-body">
                        <h5 class="card-title">Torta al cioccolato</h5>
                        <p class="card-text">Cioccolato fondente 70% e ganache vellutata: il classico che non delude mai.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-service h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Macarons">
                    <div class="card-body">
                        <h5 class="card-title">Macarons</h5>
                        <p class="card-text">Dodici gusti diversi, dalla pistacchio al lampone, preparati ogni mattina.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-brand-light py-5">
        <div class="container text-center">
            <h2 class="text-brand">Hai un'occasione speciale?</h2>
            <p class="mb-4">Compleanni, matrimoni, battesimi: creiamo la torta perfetta per te.</p>
            <a href="{{ route('servizi') }}" class="btn btn-brand">Vedi cosa possiamo fare</a>
        </div>
    </section>
</x-layout>
