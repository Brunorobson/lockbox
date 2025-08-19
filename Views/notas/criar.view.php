<?php $validacoes = flash()->get('validacoes'); ?>
<div class="flex flex-grow py-6">
    <div class="bg-base-300 rounded-l-box w-56">
        <div class="bg-base-200 p-4 rounded-tl-box">
            + Nova Nota
        </div>
    </div>

    <div class="bg-base-200 rounded-r-box w-full p-10 flex flex-col space-y-6">

        <form method="POST" class="flex flex-col space-y-6">
            <div class="fieldset">

                <legend class="fieldset-legend">Titulo</legend>
                <input type="text" name="titulo" class="input w-full" placeholder="Type here" />
                <?php if (isset($validacoes['titulo'])) { ?>
                    <div class="label text-xs text-error"><?= $validacoes['titulo'][0] ?></div>
                <?php } ?>
            </div>

            <fieldset class="fieldset">
                <legend class="fieldset-legend">Sua Nota</legend>
                <textarea class="textarea h-24 w-full" name="nota" placeholder="Bio"></textarea>
                <?php if (isset($validacoes['nota'])) { ?>
                    <div class="label text-xs text-error"><?= $validacoes['nota'][0] ?></div>
                <?php } ?>
            </fieldset>

            <div class="flex justify-end items-center">
                <button type="submit" class="btn btn-primary text-black">Salvar</button>
            </div>
        </form>

    </div>
</div>