<!DOCTYPE html>
<html>
<head>
    <title>Upload Images</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="page-header">
                <h2>Image Upload</h2>
            </div>
            <div class="panel-body">

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops !</strong> There were some problems with your input. <br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>

                    <img src="/images/{{ Session::get('path') }}">
                @endif

                <form action="{{ url('image-upload-demo') }}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" name="image"/>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>