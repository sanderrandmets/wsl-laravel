@extends('layouts.index')



@section('content')


<div class="p-12">
    <table class="table-auto w-full">
        <thead class="font-bold">
            <tr>
                <td class="px-4 py-2"><a href="?sort=title&order={{ $order }}">Tellimuse aadress</a></td>
                <td class="px-4 py-2 w-32">Tellimuse kuupäev</td>
                <td class="px-4 py-2 w-32"><a href="?sort=release_date&order={{ $order }}">Staatus</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=language&order={{ $order }}">Kliendi id</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=price&order={{ $order }}">Raamatu id</a></td>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td class="border px-4 py-2"><a href="/orders/{{ $order->id }}">{{ $order->delivery_address }}</a></td>
                <td class="border px-4 py-2">{{ $order->order_date }}</td>
                <td class="border px-4 py-2">{{ $order->status }}</td>
                <td class="border px-4 py-2">{{ $order->client_id }}</td>
                <td class="border px-4 py-2">{{ $order->book_id }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>
    <div>
        {{ $orders->withQueryString()->links() }}
    </div>
    @endsection
