<?= $livro->titulo ?>

<!--Loop para todos os livros-->
<div class="p-2 rounded  bg-stone-900 border-stone-800 border-2">
    <div class="flex"> <!--Div Pai que contém a Imagem e as Infos Iniciais do Livro-->
        <div class="w-1/3">Imagem</div> <!--Imagem do Livro-->
        <div class="space-y-2"><!--Bloco as Informações iniciais do Livro-->
            <a href="/livro.php?id=<?= $livro->id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
            <div class="text-xs italic"><?= $livro->autor ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐(3Avaliações)</div>
        </div>
    </div>
    <div class="mt-2"> <!--Descrição dos Livros-->
        <?= $livro->descricao ?>
    </div>
</div>


