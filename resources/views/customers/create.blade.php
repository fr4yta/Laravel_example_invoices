@extends('layouts.app')

@section('content')
<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj klienta..</h2>
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
                <form id="contactForm" method="post" action="{{ route('customers.store') }}">
                    {{ csrf_field() }}
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Nazwa klienta..." data-sb-validations="required" name="name" value="{{ old('name') }}" />
                        <label for="name">Nazwa klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">Nazwa jest wymagana.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="address" type="text" placeholder="Adres klienta..." data-sb-validations="required" name="address" value="{{ old('address') }}" />
                        <label for="address">Adres klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="date:required">Adres jest wymagany.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nip" type="text" placeholder="Nip klienta..." data-sb-validations="required" name="nip" value="{{ old('nip') }}" />
                        <label for="nip">NIP klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">NIP jest wymangany.</div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit" name="addNewInvoice">Dodaj nowego klienta</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
