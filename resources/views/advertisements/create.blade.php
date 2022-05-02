@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                <div class="step" data-target="#advertisement-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="advertisement-part" id="advertisement-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Advertisement Details</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#product-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="product-part" id="product-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Product Details</span>
                    </button>
                </div>
                /
                <div class="step" data-target="#service-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="service-part" id="service-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Service Details</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <div id="advertisement-part" class="content" role="tabpanel" aria-labelledby="advertisement-part-trigger">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select id="type" name="type" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="1">Product</option>
                                    <option value="2">Service</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" id="category" name="category" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Available Date:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="reservation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="advertisement_picture">Images</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="advertisement_picture" accept="image/png, image/jpeg" multiple>
                                    <label class="custom-file-label" for="advertisement_picture">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="next()">Next</button>
                </div>
                <div id="product-part" class="content" role="tabpanel" aria-labelledby="product-part-trigger">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="product_name">Name</label>
                                <input type="text" id="product_name" name="product_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_reference">Reference No</label>
                                <input type="text" id="product_reference" name="product_reference" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_quantity">Quantity</label>
                                <input type="number" id="product_quantity" name="product_quantity" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="product_description">Description</label>
                                <textarea id="product_description" name="product_description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_courier">Courier Services</label></br>
                                <label class="checkbox inline" for="option1">
                                    <input type="checkbox" name="highest_grade[]" value="1" id="option1"> 1
                                </label></br>
                                <label class="checkbox inline" for="option2">
                                    <input type="checkbox" name="highest_grade[]" value="2" id="option2"> 2
                                </label></br>
                                <label class="checkbox inline" for="option3">
                                    <input type="checkbox" name="highest_grade[]" value="3" id="option3"> 3
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="product_picture">Images</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="product_picture" accept="image/png, image/jpeg" multiple>
                                    <label class="custom-file-label" for="product_picture">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="stepper.to(1)">Previous</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div id="service-part" class="content" role="tabpanel" aria-labelledby="service-part-trigger">
                    test
                    <button class="btn btn-primary" onclick="stepper.to(1)">Previous</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
@endsection

@section('javascript')
  $(function () {
    $('#reservation').daterangepicker()
  })

  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  function next() {
      var step = 2
      if (document.getElementById('type').value == 2) {
        step = 3
      }

      stepper.to(step)
  }
  $(function () {
  bsCustomFileInput.init();
  });
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
@endsection