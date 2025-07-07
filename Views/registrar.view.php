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
            <form method="POST" action="/registrar">
                <?php
                $validacoes = flash()->get('validacoes');
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Crie sua conta</div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Nome Completo</span>
                            </div>
                            <label class="input validator bg-white border-1 border-secondary-content">
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g
                                        stroke-linejoin="round"
                                        stroke-linecap="round"
                                        stroke-width="2.5"
                                        fill="none"
                                        stroke="currentColor">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </g>
                                </svg>
                                <input type="text" name="nome" value="<?= old('nome') ?>" />
                            </label>
                        </label>
                        <?php if (isset($validacoes['nome'])): ?>
                            <div class="label text-xs text-error"><?= $validacoes['nome'][0] ?></div>
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
                                <input type="text" name="email"
                                    value="<?= old('email') ?>" />
                            </label>
                        </label>
                        <?php if (isset($validacoes['email'])): ?>
                            <div class=" label text-xs text-error"><?= $validacoes['email'][0] ?>
                            </div>
                        <?php endif; ?>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Confirmar e-mail</span>
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
                                <input type="text" name="email_confirmacao" value="<?= old('email_confirmacao') ?>" />
                            </label>
                        </label>
                        <?php if (isset($validacoes['email_confirmacao'])): ?>
                            <div class="label text-xs text-error"><?= $validacoes['email_confirmacao'][0] ?></div>
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
                            <button type="submit" class="btn btn-secondary-content btn-block">Registrar</button>
                            <a href="/login" class="link link-secondary-content">Já tenho uma conta</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>