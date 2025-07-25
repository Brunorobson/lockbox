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
            <form method="post" action="/login">
                <?php $validacoes = flash()->get('validacoes'); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Faça seu login</div>

                        <?php if ($mensagem = flash()->get('mensagem')): ?>
                            <div role="alert" class="alert alert-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <span><?= $mensagem ?></span>
                            </div>
                        <?php endif; ?>


                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">E-mail</span>
                            </div>
                            <label class="input validator bg-white border-1 border-secondary-content">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g
                                        stroke-linejoin="round"
                                        stroke-linecap="round"
                                        stroke-width="2.5"
                                        fill="none"
                                        stroke="currentColor">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </g>
                                </svg>
                                <input type="text" name="email" value="<?= old("email") ?>" />
                            </label>

                        </label>
                        <?php if (isset($validacoes['email'])): ?>
                            <div class="label text-xs text-error"><?= $validacoes['email'][0] ?></div>
                        <?php endif; ?>


                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Senha</span>
                            </div>
                            <label class="input validator bg-white border-1 border-secondary-content">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g
                                        stroke-linejoin="round"
                                        stroke-linecap="round"
                                        stroke-width="2.5"
                                        fill="none"
                                        stroke="currentColor">
                                        <path
                                            d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z"></path>
                                        <circle cx="16.5" cy="7.5" r=".5" fill="currentColor"></circle>
                                    </g>
                                </svg>
                                <input type="password" name="senha" />
                            </label>

                        </label>
                        <?php if (isset($validacoes['senha'])): ?>
                            <div class="label text-xs text-error"><?= $validacoes['senha'][0] ?></div>
                        <?php endif; ?>

                        <div class="card-actions">
                            <button type="submit" class="btn btn-secondary-content	 btn-block">Login</button>
                            <a href="/registrar" class="link link-secondary-content">Quero me Registrar</a>
                        </div>

                    </div>
            </form>
        </div>
    </div>
</div>