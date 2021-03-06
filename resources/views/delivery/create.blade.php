@extends('delivery')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <h2 class="display-6">Dodaj dostawę</h2>
        </div>
    </div>
    @if($errors->any())
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('delivery.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="receipt_of_data">
                        Data przyjęcia dostawy:
                    </label>
                    <input class="form-control" type="date" name="receipt_of_data">
                </div>
                <div class="form-group">
                    <label for="supplier_company_id">
                        Firma / Dostawca:
                    </label>
                    <select class="custom-select" name="supplier_company">
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="document">
                        Dokument przyjęcia:
                    </label>
                    <textarea class="form-control" name="document"></textarea>
                </div>
                <div class="form-group">
                    <label for="recipient">
                        Przyjmujący dostawę:
                    </label>
                    <select class="custom-select" name="recipient">
                        @foreach($workers as $worker)
                            <option value="{{ $worker->id }}">
                                {{ $worker->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="delivery_calculated">
                        Czy dostawa została policzona:
                    </label>
                    <select class="custom-select" name="delivery_calculated">
                        <option value="Tak">
                            Tak
                        </option>
                        <option value="Nie">
                            Nie
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="counting_person">
                        Osoba która liczyła towar:
                    </label>
                    <select class="custom-select" name="counting_person">
                        @foreach($workers as $worker)
                            <option value="{{ $worker->id }}">
                                {{ $worker->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="products">
                        Produkty:
                    </label>
                    <select class="custom-select" name="products[]" multiple>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">
                        Ilość:
                    </label>
                    <textarea class="form-control" name="quantity"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Zapisz</button>
            </form>
        </div>
    </div>
@endsection
