@extends('layouts.master')

@section('content')
<section>
<div class="container">


    <div class="row" style="margin-top: 20px">
        <div class="col-lg-3">

        </div>
<div class="col-lg-6">

<button type="button" class="btn btn-primary">Step - 1</button>
<button type="button" class="btn btn-secondary">Step - 2</button>
<button type="button" class="btn btn-secondary">Step - 3</button>
<button type="button" class="btn btn-secondary">Step - 4</button>
<button type="button" class="btn btn-secondary">Step - 5</button>

<div style="margin-top: 50px; margin-bottom:10px">

    <h6>Token Number: TAX2021CU0001</h6>
    <a href="hello.pdf" class="btn btn-outline-primary">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/833px-PDF_file_icon.svg.png" width="20" style="margin-right: 10px" /> 
        Download Document</a>
</div>

</div>
        
        <div class="col-lg-3">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">

        </div>
        <div class="col-lg-3" style="margin-top: 10px; margin-bottom:10px">
            <a href="/step2" class="btn btn-danger">
                Next 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
            </a>
        </div>
    </div>
</div>
</section>
{{-- <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="/updocument" method="post" enctype="multipart/form-data">
                <input type="text" name="doucment_year" id="doucment_year" placeholder="year">
                <select name="document_type" id="document_type">
                    <option>Document Type</option>
                    <option value="TaxOrganizer">Tax Organizer</option>
                    <option value="w2Form">Form W2</option>
                    <option value="others">Others</option>
                </select>
                <input type="file" name="document_name" id="document_name"><span>Document</span>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                <input type="submit" value="submit">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div> --}}
    
@endsection