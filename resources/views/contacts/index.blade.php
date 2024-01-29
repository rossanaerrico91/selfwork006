<x-layout>
    <div class="container py-4">
        <form action="{{ route('contatti.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input class="form-control" type="text" placeholder="Nome" name="nome" value="{{ old('nome') }}" />
            </div>

            <!-- Input Telefono -->
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input class="form-control" type="text" placeholder="Telefono" name="telefono"
                    value="{{ old('telefono') }}" />
            </div>

            <!-- Input Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" type="email" placeholder="Email" name="email"
                    value="{{ old('email') }}" />
            </div>
            <!-- Input Messaggio -->
            <div class="mb-3">
                <label class="form-label">Messaggio</label>
                <textarea class="form-control" type="text" placeholder="Messaggio" style="height: 10rem;" name="messaggio"
                    value="{{ old('messaggio') }}"></textarea>
            </div>

            <!-- Tasto Invia -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Invia</button>
            </div>

        </form>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</x-layout>
