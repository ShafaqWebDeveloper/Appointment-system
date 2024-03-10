@include('components/header')
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      @include('components/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('components/navbar')
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Doctor </h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form id="data" class="forms-sample">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="dname" id="dname" class="form-control">
                        <small id="cdname" style="color:red;">must contain at least 3 letters and numbers are not allowed</small>
                      </div>
                      <div class="form-group">
                        <label>Father Name</label>
                        <input type="text" name="dfname" id="dfname" class="form-control">
                        <small id="cdfname" style="color:red;">must contain at least 3 letters and numbers are not allowed</small>
                      </div>
                      <div class="form-group">
                        <label>Gender</label></br>
                        Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="dgen" value="Male"></br>
                        Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="dgen" value="Female">
                        <small id="dgen" ></small>
                      </div>
                      <div class="form-group">
                        <label>Specialiaty</label>
                        <select name="dspec" class="form-control">
                          <option value="Family physician">Family physician</option>
                          <option value="Internist">Internist</option>
                          <option value="Emergency physician">Emergency physician</option>
                          <option value="Psychiatrist">Psychiatrist</option>
                          <option value="Obstetricians and gynecologist">Obstetricians and gynecologist</option>
                          <option value=" Neurologist"> Neurologist</option>
                          <option value="Radiologist">Radiologist</option>
                          <option value="Anesthesiologist">Anesthesiologist</option>
                          <option value="Pediatrician">Pediatrician</option>
                          <option value="Cardiologist">Cardiologist</option>
                        </select>
                        <small id="dspec" style="color:red;"></small>
                      </div>
                      <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" id="dmobile" name="dmobile" class="form-control">
                        <small id="cdmobile" style="color:red;">11 numbers</small>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="demail" id="demail" class="form-control">
                        <small id="cdemail" style="color:red;">write correct pattern as example@domain.com</small>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="dpass" class="form-control" id="dpass">
                        <small id="cdpass" style="color:red;">must contain at least 8 characters including upper case ,lower case ,non repeated digit and a special symbol ,white spaces not allowed</small>
                      </div>
                      <div class="form-group">
                        <label>Pic</label>
                        <input type="file" name="dpic" class="form-control">
                        <small id="dpic" style="color:red;"></small>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" id="sub">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @include('components/footer')

          <!-- -----------validation------- -->
          <script>
            // for name
    const dname=document.getElementById('dname');
    console.log(dname);
    dname.addEventListener('input',()=>{
    console.log("dname");
    let regx=/(^[a-zA-Z]{2,10}$)/;
    let strn=dname.value;
    // console.log(regx,strn);
    const cdname=document.getElementById('cdname');
    if(regx.test(strn)){
      console.log('matched');
      cdname.style.display="none";
    }
    else{
      console.log('no match');
      cdname.style.display="block";
    }
  });

   // for father name
   const dfname=document.getElementById('dfname');
    console.log(dfname);
    dfname.addEventListener('input',()=>{
    console.log("dfname");
    let regx=/(^[a-zA-Z]{2,10}$)/;
    let strn=dfname.value;
    // console.log(regx,strn);
    const cdfname=document.getElementById('cdfname');
    if(regx.test(strn)){
      console.log('matched');
      cdfname.style.display="none";
    }
    else{
      console.log('no match');
      cdfname.style.display="block";
    }
  });
  // for mobile

const dmobile=document.getElementById('dmobile');
    // console.log(dmobile);
    dmobile.addEventListener('input',()=>{
    // console.log("dmobile");
    let regx=/(^[0-9]{11}$)/;
    let strn=dmobile.value;
    // console.log(regx,strn);
    if(regx.test(strn)){
      console.log('matched');
      cdmobile.style.display="none";
    }
    else{
      console.log('no match');
      cdmobile.style.display="block";
    }
  });

  //   for email
  const demail=document.getElementById('demail');

// console.log(demail);
demail.addEventListener('input',()=>{
// console.log("demail");
let regx=/^([_\.\-0-9-a-zA-Z]+)@([_\.\0-9-a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
let strn=demail.value;
// console.log(regx,strn);
const cdemail=document.getElementById('cdemail');
if(regx.test(strn)){
console.log('matched');
cdemail.style.display="none";
}
else{
console.log('no match');
cdemail.style.display="block";
}
});

// for password
const dpass=document.getElementById('dpass');
    // console.log(dpass);
    dpass.addEventListener('input',()=>{ 
    // console.log("dpass");
    let regx=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{8,}$/;
    let strn=dpass.value;
    // console.log(regx,strn);
    if(regx.test(strn)){
      console.log('matched');
      cdpass.style.display="none";
    }
    else{
      console.log('no match');
      cdpass.style.display="block";
    }
  });
          </script>
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
url:"{{url('/doc')}}",
method:"post",
contentType:false,
processData:false,
data:form,
success:function(res){
    if(res.status==2){
      Swal.fire(
  'Good job!',
  'Data inserted!',
  'success'
)
    }
    else{
        Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'something went wrong!',
});
    }
},
error: function(error) {
                    if(error.responseJSON.errors.dname){
                        $('#dname').text("name field cant be blank");
                    }
                    if(error.responseJSON.errors.dfname){
                        $('#dfname').text("father name field cant be blank");
                    }
                    if(error.responseJSON.errors.dgen){
                        $('#dgen').text("father name field cant be blank");
                    }
                    if(error.responseJSON.errors.dspec){
                        $('#dspec').text("Speciality field cant be blank");
                    }
                    if(error.responseJSON.errors.dmobile){
                        $('#dmobile').text("mobile field cant be blank");
                    }
                    if(error.responseJSON.errors.demail){
                        $('#demail').text("email field cant be blank and email should be unique");
                    }
                    if(error.responseJSON.errors.dpass){
                        $('#dpass').text("pass field cant be blank");
                    }
                    if(error.responseJSON.errors.dpic){
                        $('#dpic').text("pic field cant be blank and picture must be of extension jpg/png/jpeg");
                    }


}
});
});
        });
    </script>
          <!-- content-wrapper ends -->