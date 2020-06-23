@extends('delivery')

@section('main')
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <h2 class="display-6">Edytuj</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{ url('/deliveries') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="receipt_of_data">
                        Data przyjęcia dostawy:
                    </label>
                    <input value="{{ $delivery->receipt_of_data }}" class="form-control" type="date" name="receipt_of_data">
                </div>
                <div class="form-group">
                    <label for="supplier_company">
                        Firma / Dostawca:
                    </label>
                    <input value="{{ $delivery->supplier_company }}" class="form-control" type="text" name="supplier_company">
                </div>
                <div class="form-group">
                    <label for="document">
                        Dokument przyjęcia:
                    </label>
                    <input value="{{ $delivery->document }}" class="form-control" type="text" name="document">
                </div>
                <div class="form-group">
                    <label for="recipient">
                        Przyjmujący dostawę:
                    </label>
                    <input value="{{ $delivery->recipient }}" class="form-control" type="text" name="recipient">
                </div>
                <div class="form-group">
                    <label for="delivery_calculated">
                        Czy dostawa została policzona:
                    </label>
                    <input value="{{ $delivery->delivery_calculated }}" class="form-control" type="text" name="delivery_calculated">
                </div>
                <div class="form-group">
                    <label for="counting_person">
                        Osoba która liczyła towar:
                    </label>
                    <input value="{{ $delivery->counting_person }}" class="form-control" type="text" name="counting_person">
                </div>
                <div class="form-group">
                    <label for="products">
                        Produkty:
                    </label>
                    <input value="{{ $delivery->products }}" class="form-control" type="text" name="products">
                </div>
                <div class="form-group">
                    <label for="quantity">
                        Ilość:
                    </label>
                    <input value="{{ $delivery->quantity }}" class="form-control" type="number" name="quantity">
                </div>
                <button class="btn btn-primary" type="submit">Zapisz</button>
            </form>
        </div>
    </div>
@endsection
