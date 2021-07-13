@extends('layouts.app')

@section('content')
<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj nową fakturę..</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="post" action="{{ route('invoices.store') }}">
                    {{ csrf_field() }}
                    <div class="form-floating mb-3">
                        <select class="form-select" name="customer_id">
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nr_faktury" type="text" placeholder="Numer faktury..." data-sb-validations="required" name="nr_faktury" />
                        <label for="name">Numer faktury</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">Numer jest wymagany.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="date" type="text" placeholder="Data wystawienia faktury..." data-sb-validations="required" name="date" />
                        <label for="date">Data wystawienia faktury</label>
                        <div class="invalid-feedback" data-sb-feedback="date:required">Data jest wymagana</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kwota" type="text" placeholder="Kwota faktury..." data-sb-validations="required" name="kwota" />
                        <label for="kwota">Kwota faktury</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">Kwota jest wymagana.</div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit" name="addNewInvoice">Dodaj nową</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
