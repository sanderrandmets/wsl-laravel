<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"><title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body class="p-12">
       <table class="table-auto w-full">
            <thead>
                <tr>
                    <td class="px-4 py-2">Pealkiri</td>

                    <td class="px-4 py-2"><a href="?sort=release_date">Aasta</a></td>

                    <td class="px-4 py-2"><a href="?sort=language">Keel</a></td>

                    <td class="px-4 py-2"><a href="?sort=price">Hind</a></td>

                    <td class="px-4 py-2"><a href="?sort=stock_saldo">Laoseis</a></td>

                    <td class="px-4 py-2"><a href="?sort=release_date">Lehekülgi</a></td>

                    <td class="px-4 py-2"><a href="?sort=release_date">Tüüp</a></td>
                </tr>
            </thead>
            <tbody>

                @foreach($books as $book)

                <tr>
                    <td class="border px-4 py-2">{{ $book->title }}</td>

                    <td class="border px-4 py-2">{{ $book->release_date }}</td>

                    <td class="border px-4 py-2">{{ $book->language }}</td>

                    <td class="border px-4 py-2">{{ $book->price }}</td>

                    <td class="border px-4 py-2">{{ $book->stock_saldo }}</td>

                    <td class="border px-4 py-2">{{ $book->pages }}</td>

                    <td class="border px-4 py-2">{{ $book->type }}</td>
                </tr>

                @endforeach

            </tbody>

       </table>
<div>
{{ $books->links() }}
</div>
    </body>

</html>
