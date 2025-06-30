<!-- Container Central -->
<div class="bg-slate-950 flex flex-col items-center justify-center px-4 py-8">

    <!-- Card do Filme -->
    <div class="grid grid-cols-3 gap-8 p-8 rounded-2xl w-full max-w-6xl">

        <!-- Coluna da Imagem (1/3) -->
        <div class="col-span-1 flex justify-center items-start">
            <img src="<?= $filme->imagem ?>" alt="Capa do Filme" class="rounded-xl w-full max-w-xs shadow-lg">
        </div>

        <!-- Coluna dos Detalhes (2/3) -->
        <div class="col-span-2 flex flex-col justify-between h-full text-slate-200">

            <!-- Parte superior: informações -->
            <div class="space-y-4">
                <a href="<?= $_SERVER['HTTP_REFERER'] ?? '/' ?>" class="flex items-center gap-2 text-slate-300 hover:text-white">
                    <i class="ph-fill ph-arrow-left"></i>
                    <span>Voltar</span>
                </a>
                <div class="text-3xl font-bold"><?= $filme->titulo ?></div>
                <div class="text-purple-400 font-semibold"><b>Categoria: </b><?= $filme->categoria ?></div>
                <div class="text-sm text-slate-400"><b>Ano: </b><?= $filme->ano ?></div>

                <div class="flex items-center gap-2 text-xs italic text-slate-300">
                    <div class="flex gap-1">
                        <?php
                        $nota = $filme->nota_avaliacao;
                        for ($i = 1; $i <= 5; $i++):
                            $classe = $i <= $nota ? 'ph-fill' : 'ph-light';
                        ?>
                            <i class="ph-star <?= $classe ?> text-purple-500 text-2xl"></i>
                        <?php endfor; ?>
                    </div>
                    <span class="text-slate-400 text-sm">
                        <?= fmod($nota ?? 0, 1) === 0.0 ? (int) $nota : number_format($nota, 1, ',', '') ?> / 5 (<?= $filme->count_avaliacoes ?> Avaliações)
                    </span>
                </div>
            </div>

            <!-- Parte inferior: descrição -->
            <div class="text-sm text-slate-300 leading-relaxed mt-6">
                <?= $filme->descricao ?>
            </div>
        </div>
    </div>

    <!-- Avaliações -->
    <div class="w-full max-w-6xl mt-8">
        <?php require 'partials/_avaliacoes.php'; ?>
    </div>
</div>