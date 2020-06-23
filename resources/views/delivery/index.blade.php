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
                            {{$delivery->products}}
                        </td>
                        <td>
                            {{$delivery->quantity}}
                        </td>
                        <td>
                            <button disabled="disabled">Edytuj</button>
                        </td>
                        <td>
                            <button disabled="disabled">Usuń</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
