 <div class="bg-base-300 rounded-l-box w-56 flex flex-col divide-y divide-base-200">
     <?php foreach ($notas as $key => $nota): ?>
         <a href="/notas?id=<?= $nota->id ?><?= isset($_GET['pesquisar']) ? '&pesquisar=' . $_GET['pesquisar'] : '' ?>" class=" w-full p-2 cursor-pointer hover:bg-base-200
             <?php if ($key == 0): ?>rounded-tl-box<?php endif; ?>
             <?php if ($nota->id == $notaSelecionada->id): ?> bg-base-200<?php endif; ?> ">
             <?= $nota->titulo ?>
         </a>

     <?php endforeach; ?>
 </div>

 <div class=" bg-base-200 rounded-r-box w-full p-10 flex flex-col space-y-6">
     <div class="fieldset">
         <legend class="fieldset-legend">Titulo</legend>
         <input name="titulo" value="<?= $notaSelecionada->titulo ?>" type=" text" class="input w-full" placeholder="Type here" />
     </div>

     <fieldset class="fieldset">
         <legend class="fieldset-legend">Sua Nota</legend>
         <textarea name="nota" class="textarea h-24 w-full" placeholder="Bio"><?= $notaSelecionada->nota ?></textarea>
     </fieldset>

     <div class="flex justify-between items-center">
         <button class="btn btn-error text-black">Deletar</button>
         <button class="btn btn-primary text-black">Atualizar</button>
     </div>