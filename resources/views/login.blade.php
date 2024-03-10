@include('components/header')
  <body>
  @if(session("msg"))
    <div class="alert alert-danger" role="alert">
    <ul>
        <li>{{session("msg")}}</li></ul>
    </div>
    @endif

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form  id="data">
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" name="pass" class="form-control">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" id="sub" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                </form>
              </div>
            </div
            >
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <x-footer/>
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
$.ajax({
url:"{{url('/loginnow')}}",
method:"post",
contentType:false,
processData:false,
data:form,
success:function(res){
  alert(res.s);
    location.reload(true);
},

});
});
        });
    </script>





