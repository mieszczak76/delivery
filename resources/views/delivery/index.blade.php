@extends('delivery')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Data przyjęcia dostawy</th>
                    <th>Firma / Dostawca</th>
                    <th>Dokument przyjęcia</th>
                    <th>Przyjmujący dostawę</th>
                    <th>Czy dostawa została policzona</th>
                    <th>Osoba która liczyła towar</th>
                    <th>Produkty</th>
                    <th>Ilość</th>
                    <th colspan="2">Akcja</th>
                </tr>
                </thead>
                <tbody>
                @foreach($deliveries as $delivery)
                    <tr>
                        <td>
                            {{$delivery->id}}
                        </td>
                        <td>
                            {{$delivery->receipt_of_data}}
                        </td>
                        <td>
                            {{$delivery->supplier_company}}
                        </td>
                        <td>
                            {{$delivery->document}}
                        </td>
                        <td>
                            {{$delivery->recipient}}
                        </td>
                        <td>
                            {{$delivery->delivery_calculated}}
                        </td>
                        <td>
                            {{$delivery->counting_person}}
                        </td>
                        <td>
                            @foreach($delivery->getProducts() as $product)
                                {{ $product->getProduct()->name }} <br/>
                            @endforeach
                        </td>
                        <td>
                            {{$delivery->quantity}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="row">
                <a href="{{ route('delivery.create') }}" class="btn btn-success">Dodaj</a>
            </div>
        </div>
    </div>
@endsection
