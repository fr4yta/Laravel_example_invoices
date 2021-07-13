@extends('layouts.app')

@section('content')
<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj aktualną fakturę.. <b>[ID: {{ $invoice->id }}]</b></h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="post" action="{{ route('invoices.update', ['id' => $invoice->id]) }}">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nr_faktury" type="text" placeholder="Numer faktury..." data-sb-validations="required" name="nr_faktury" value="{{ $invoice->number }}" />
                        <label for="name">Numer faktury</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">Numer jest wymagany.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="date" type="text" placeholder="Data wystawienia faktury..." data-sb-validations="required" name="date" value="{{ $invoice->date }}" />
                        <label for="date">Data wystawienia faktury</label>
                        <div class="invalid-feedback" data-sb-feedback="date:required">Data jest wymagana</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kwota" type="text" placeholder="Kwota faktury..." data-sb-validations="required" name="kwota" value="{{ $invoice->total }}" />
                        <label for="kwota">Kwota faktury</label>
                        <div class="invalid-feedback" data-sb-feedback="nr_faktury:required">Kwota jest wymagana.</div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit" name="addNewInvoice">Edytuj fakturę</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
