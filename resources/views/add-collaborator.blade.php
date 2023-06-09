<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Add Collaborator</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
           <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add New Collaborator
                    </div>
                    <div class="card-body">
                        <!--Message Alert-->
                        @if(Session::has('collaborator_added'))
                        <div class="alert alert-success" role="alert">
                             {{Session::get('collaborator_added')}}
                        </div>
                        @endif


                        <form method="POST" action="{{route('collaborator.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Lastname</label>
                                <input type="text" name="lastname" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Phone</label>
                                <input type="text" name="phone" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Email</label>
                                <input type="text" name="email" class="form-control"/>
                            </div>
                            <!--Choose file con su respectiva funcion de preview-->
                            <div class="form-group">
                                <label for="file">Choose Image</label>
                                <input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
                                <img id="previewImg" src="" alt="preview image" style="max-width:130px;margin-top:20px;"/>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-warning" href="{{ url('all-collaborators/') }}">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
           </div> 
        </div>
    </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        


        <script>//Funcion para preview de imagen que se planea subir
            function previewFile(input)
            {
                var file=$("input[type=file]").get(0).files[0];
                if(file)
                {
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg').attr("src",reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script> 
</body>
</html>