@extends('delivery')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <h2 class="display-6">Dodaj</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/deliveries') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="receipt_of_data">
                        Data przyjęcia dostawy:
                    </label>
                    <input class="form-control" type="date" name="receipt_of_data">
                </div>
                <div class="form-group">
                    <label for="supplier_company">
                        Firma / Dostawca:
                    </label>
                    <input class="form-control" type="text" name="supplier_company">
                </div>
                <div class="form-group">
                    <label for="document">
                        Dokument przyjęcia:
                    </label>
                    <input class="form-control" type="text" name="document">
                </div>
                <div class="form-group">
                    <label for="recipient">
                        Przyjmujący dostawę:
                    </label>
                    <input class="form-control" type="text" name="recipient">
                </div>
                <div class="form-group">
                    <label for="delivery_calculated">
                        Czy dostawa została policzona:
                    </label>
                    <input class="form-control" type="text" name="delivery_calculated">
                </div>
                <div class="form-group">
                    <label for="counting_person">
                        Osoba która liczyła towar:
                    </label>
                    <input class="form-control" type="text" name="counting_person">
                </div>
                <div class="form-group">
                    <label for="products">
                        Produkty:
                    </label>
                    <input class="form-control" type="text" name="products">
                </div>
                <div class="form-group">
                    <label for="quantity">
                        Ilość:
                    </label>
                    <input class="form-control" type="number" name="quantity">
                </div>
                <button class="btn btn-primary" type="submit">Zapisz</button>
            </form>
        </div>
    </div>
@endsection
