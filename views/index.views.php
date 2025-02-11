<form class="w-full flex space-x-2 mt-6">
    <input type="text" name="pesquisar" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar...">
    <button type="submit">🔍</button>
</form>

<!--Section de Livros-->

<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

    <!--Livros-->
    <?php foreach ($livros as $livro): ?> <!--Loop para todos os livros-->
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

    <?php endforeach; ?>

</section>