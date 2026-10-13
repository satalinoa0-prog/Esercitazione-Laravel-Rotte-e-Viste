<x-layout>
    <x-slot:title>Chi Siamo</x-slot:title>

    <header class="bg-brand-light py-5">
        <div class="container text-center">
            <h1 class="text-brand">Chi Siamo</h1>
            <p class="lead mb-0">Una famiglia, un forno, tanta passione.</p>
        </div>
    </header>

    <section class="container my-5">
        <div class="row align-items-center g-5">
            <div class="col-12 col-md-6">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=900&q=80"
                     class="img-fluid rounded shadow" alt="Il nostro laboratorio">
            </div>
            <div class="col-12 col-md-6">
                <h2 class="text-brand">La nostra storia</h2>
                <p>Dolce Forno nasce nel 1985 dall'idea di Giulia e Marco, due pasticceri innamorati del loro mestiere.
                   Da allora il laboratorio è cresciuto, ma la ricetta è rimasta la stessa: ingredienti selezionati,
                   lavorazioni lente e nessuna scorciatoia.</p>
                <p>Oggi in squadra siamo in dieci, e ogni mattina prima dell'alba il profumo di pane e burro
                   riempie la via.</p>
            </div>
        </div>
    </section>

    <section class="bg-brand-light py-5">
        <div class="container">
            <h2 class="text-center text-brand mb-4">I nostri valori</h2>
            <div class="row text-center g-4">
                <div class="col-12 col-md-4">
                    <div class="icon-circle d-flex align-items-center justify-content-center mx-auto mb-3 bg-white">
                        <i class="bi bi-flower1"></i>
                    </div>
                    <h5>Ingredienti genuini</h5>
                    <p class="text-muted">Uova da allevamenti locali, burro e farine di qualità.</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="icon-circle d-flex align-items-center justify-content-center mx-auto mb-3 bg-white">
                        <i class="bi bi-hourglass-split"></i>
                    </div>
                    <h5>Tempo e cura</h5>
                    <p class="text-muted">Lievitazioni lunghe e lavorazioni a mano, senza fretta.</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="icon-circle d-flex align-items-center justify-content-center mx-auto mb-3 bg-white">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
                    <h5>Il sorriso dei clienti</h5>
                    <p class="text-muted">Il nostro successo è vedervi tornare, domani e anche tra vent'anni.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5 text-center">
        <h2 class="text-brand mb-3">Il team</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3">
                <i class="bi bi-person-circle display-1 text-brand"></i>
                <h6 class="mt-2 mb-0">Giulia</h6>
                <small class="text-muted">Pasticcera</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="bi bi-person-circle display-1 text-brand"></i>
                <h6 class="mt-2 mb-0">Marco</h6>
                <small class="text-muted">Maestro panettiere</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="bi bi-person-circle display-1 text-brand"></i>
                <h6 class="mt-2 mb-0">Sara</h6>
                <small class="text-muted">Cake designer</small>
            </div>
        </div>
    </section>
</x-layout>
