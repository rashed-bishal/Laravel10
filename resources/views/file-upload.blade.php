<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>File Uploading
    </title>
</head>
<body style="text-align:center">
    <h2>This is a file uploading panel</h2>
    <form action="{{route('file-upload')}}" method="post" enctype="multipart/form-data">
        <div class="form-group" style="margin-right:25%; margin-left:25%">
            <label for="image" class="form-control">Upload an image</label>
            <input type="file" name="img" class="form-control"/>
        </div>
        <input type="submit" value="Upload" class="btn btn-success"/>
        @csrf
    </form>
    <img src="{{asset('/storage/img/sonic.jpg')}}" alt=""/>
</body>
</html>