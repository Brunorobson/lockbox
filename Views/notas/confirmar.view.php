<?php $validacoes = flash()->get('validacoes'); ?>

<div class="bg-base-300 rounded-box w-full pt-20 flex flex-col items-center">
    <form action="/mostrar" method="POST" class="max-w-md flex flex-col gap-4 w-full px-4">

        <!-- título mais discreto -->
        <div class="text-center text-lg font-semibold">
            Digite sua senha para ver suas notas descriptografadas
        </div>

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Senha</span>
            </div>

            <!-- input do mesmo tamanho do botão -->
            <input
                type="password"
                name="senha"
                class="input input-bordered w-full bg-white text-black"
                placeholder="••••••••" />

            <?php if (isset($validacoes['senha'])) { ?>
                <div class="label text-xs text-error"><?= $validacoes['senha'][0] ?></div>
            <?php } ?>
        </label>

        <button class="btn btn-primary w-full">
            Abrir minhas notas
        </button>
    </form>
</div>