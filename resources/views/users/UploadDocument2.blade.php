@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px">
        <div class="col-lg-3">

        </div>
<div class="col-lg-6">

<button type="button" class="btn btn-secondary">Step - 1</button>
<button type="button" class="btn btn-primary">Step - 2</button>
<button type="button" class="btn btn-secondary">Step - 3</button>
<button type="button" class="btn btn-secondary">Step - 4</button>
<button type="button" class="btn btn-secondary">Step - 5</button>

<div style="margin-top: 50px; margin-bottom:10px">

    <h6>Upload Document:</h6>

    <div class="dropdown" style="margin-top: 20px; margin-bottom:10px">
        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown">Select category
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Tax Organiser</a></li>
          <li><a href="#">Form W2</a></li>
          <li><a href="#">Others</a></li>
        </ul>
      </div>

      <div class="dropdown" style="margin-top: 20px; margin-bottom:10px">
        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Financial Year
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">2021</a></li>
          <li><a href="#">2020</a></li>
          <li><a href="#">2019</a></li>
        </ul>
      </div>

</div>

</div>
        
        <div class="col-lg-3">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <button type="button" class="btn btn-outline-primary">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/833px-PDF_file_icon.svg.png" width="20" style="margin-right: 10px" /> 
                Select Document</button>
        </div>
        <div class="col-lg-3" style="margin-top: 10px; margin-bottom:10px">
            <button type="button" class="btn btn-danger">
                Next 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
            </button>
        </div>
    </div>
</div>
@endsection