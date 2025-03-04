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
                <li><a href="./index.php" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <li><a href="/login" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>

    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <?php require "views/{$view}.views.php" ?>
    </main>

</body>

</html>