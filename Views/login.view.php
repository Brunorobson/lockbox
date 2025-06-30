<div class="grid grid-cols-2">
    <div class="hero min-h-screen flex ml-40">
        <div class="hero-content -mt-20">
            <div>
                <p class="py-2 text-xl">
                    Bem Vindo ao
                </p>
                <h1 class="text-6xl font-bold">LockBox</h1>
                <p class="pt-2 pb-4 text-xl">
                    Onde você guarda <span class="italic">tudo</span> com segurança.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-white hero mr-40 min-h-screen text-black">
        <div class="hero-content -mt-20">
            <form method="POST" action="/login">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Faça seu login</div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Email</span>
                            </div>
                            <input type="email" name="email" class="input input-bordered w-full max-w-xs bg-white" placeholder="Digite seu email" required>
                        </label>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Senha</span>
                            </div>
                            <input type="password" name="senha" class="input input-bordered w-full max-w-xs bg-white" placeholder="Digite seu email" required>
                        </label>

                        <div class="card-actions">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <a href="/registrar" class="btn btn-link">Quero me Registrar</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>