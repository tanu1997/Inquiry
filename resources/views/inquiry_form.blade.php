<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Form Validation in Laravel</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    
        <form  method="post" action="{{ route('validate.form') }}" id="formValidation" novalidate>
            @csrf
            <div class="form-group mb-2">
                <label>First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="fisrt_name" id="first_name">
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>Last Name</label>
                <input type="email" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>Email ID</label>
                <input type="text" class="form-control @error('email_id') is-invalid @enderror" name="email_id" id="email_id">
                @error('email_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>Country</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" id="country">
                @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="form-group mb-2">
                <label>Qualifications</label>
                <textarea class="form-control @error('qualifications') is-invalid @enderror" name="qualifications" id="qualifications" rows="4"></textarea>
                @error('qualifications')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                     
            </div>

            <div class="form-group mb-2">
                <label>Details</label>
                <textarea class="form-control @error('details') is-invalid @enderror" name="details" id="details" rows="4"></textarea>
                @error('details')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                     
            </div>
            <div class="form-group mb-2">
                <label>Question</label>
                <textarea class="form-control @error('question') is-invalid @enderror" name="question" id="question" rows="4"></textarea>
                @error('question')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $question }}</strong>
                    </span>
                @enderror   
               

            </div>

            <div class="form-group mb-2">
                <label>Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $description }}</strong>
                    </span>
                @enderror                     
            </div>

            <div class="row">
              <input type="hidden" name="id" value="">   
            </div> 

            <div class="row">
              <input type="hidden" name="question_id" value="">   
            </div>                                     
                                                    
                                                
            

            

            


            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
</body>


</html>

<script>
    $("formValidation").validate().resetForm();
</script>
