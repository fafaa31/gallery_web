@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <section class="pt-2 pb-5 text-center container">
                            <div class="row py-lg-5">
                                <div class="col-lg-6 col-md-8 mx-auto">
                                    <h1 class="fw-light">Save all the Memories in this Gallery 📷</h1><br>
                                    <p class="lead text-body-secondary">Look at the photos in your gallery to reminisce about some of the happy memories that have passed, while listening to sad music<br>
                                    ▶︎ •၊၊||၊|။||||။‌‌‌‌‌၊|• 17:31</p>
                                </div>
                            </div>
                        </section>

                        <div class="container pb-5">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                @foreach ($gallery as $item)
                                    <div class="col">
                                        <div class="card shadow-sm" style="height: 380px">
                                            <img src={{ asset('fotoku/' . $item->picture) }} alt="girl"
                                                style="height: 250px">
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <p class="card-text">
                                                    {{ Str::limit($item->caption, 50) }}
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-md btn-outline-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#view{{ $item->id }}">
                                                            <x-bi-eye-fill />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @include('admin.modalView')
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
