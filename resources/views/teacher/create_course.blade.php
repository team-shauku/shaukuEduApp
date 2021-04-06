<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .why-us .content {
    margin-top: 50px;
    padding: 30px;
    background: #bb5dbb;
    border-radius: 4px;
    color: #fff;
    /* margin-bottom: 100px; */
  }
  
  .why-us .content h3 {
    font-weight: 700;
    font-size: 34px;
    margin-bottom: 30px;
  }
  
  .why-us .content p {
    margin-bottom: 30px;
  }
  
    </style>
</head>

<body>

    <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          {{-- <div> --}}
            <div class="why-us"  id="why-us">

                <div class="row">
                  <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                      <div class="text-center"><h3>Upload Course</h3></div>
{{-- <form action=""> --}}

        
            <div class="form-group">
                {{-- <label class="custom-file-label" for="chooseFile"></label> --}}
              <label for="exampleFormControlFile1">Select file</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
            </div>

            <div class="form-group">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="course description">Description</textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" style="background-color: #800080">
                Upload Files
            </button>
       
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</form>
</body>
</html>