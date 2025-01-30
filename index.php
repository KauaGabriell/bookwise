<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWise</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900 shadow-lg">

        <!--Barra de Navegação-->
        <nav class="mx-auto max-w-screen-lg py-4 flex justify-between">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="#" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>

    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        <form class="w-full flex space-x-2 mt-6">
            <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar...">
            <button type="submit">🔍</button>
        </form>


        <!--Section de Livros-->
        <section class="space-y-4">

            <!--Livros-->
            <div class="w-1/3 p-2 rounded  bg-stone-900 border-stone-800 border-2">
                <div class="flex"> <!--Div Pai que contém a Imagem e as Infos Iniciais do Livro-->
                    <div class="w-1/3">Imagem</div> <!--Imagem do Livro-->
                    <div><!--Bloco as Informações iniciais do Livro-->
                        <div class="font-semibold">Titulo</div>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3Avaliações)</div>
                    </div>
                </div>
                <div> <!--Descrição dos Livros-->
                    Descrição
                </div>
            </div>
            
        </section>




    </main>

</body>
</html>