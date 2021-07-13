@extends('layouts.app')

@section('content')
<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj klienta.. <b>[ID: {{ $customer->id }}]</b></h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="post" action="{{ route('customers.update', ['klienci' => $customer->id]) }}">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Nazwa klienta..." data-sb-validations="required" name="name" value="{{ $customer->name }}" />
                        <label for="name">Nazwa klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">Nazwa jest wymagana</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="address" type="text" placeholder="Adres klienta..." data-sb-validations="required" name="address" value="{{ $customer->address }}" />
                        <label for="address">Adres klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="date:required">Adres jest wymagany</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nip" type="text" placeholder="NIP klienta..." data-sb-validations="required" name="nip" value="{{ $customer->nip }}" />
                        <label for="nip">Nip klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">NIP jest wymagany.</div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit" name="addNewInvoice">Edytuj dane klienta</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
