<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Teacher insert</title>
</head>
<body>
    <form id="data">
        @method("PUT")
        <div class="form-group mt-3">
        <label for="">Name</label>
        <input type="text" class="form-control" name="tname" value="{{$alldata['tname']}}" id="">
        <small id="tname" style="color:red;"></small>
        </div>
        <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="temail" value="{{$alldata['temail']}}" id="">
        <small id="temail" style="color:red;"></small></div>
        <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" class="form-control" name="tmobile" value="{{$alldata['tmobile']}}" id="">
        <small id="tmobile" style="color:red;"></small></div>
        <div class="form-group">
        <label for="">Pic</label>
        <input type="file" class="form-control" name="tpic" value="{{$alldata['tpic']}}" id="">
        <small id="tpic" style="color:red;"></small></div>
        <input type="submit" class="btn btn-primary" value="update" id="sub">
    </form>
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
$.ajaxSetup({
headers:
{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$("#sub").on("click",function(g){
g.preventDefault();
var form=new FormData(data);
alert(form);
$.ajax({
url:"{{url('/view'.$alldata->tid)}}",
method:"POST",
contentType:false,
processData:false,
data:form,
success:function(res){
    alert(res.msg);
},
});
});
        });
    </script>
</body>
</html>