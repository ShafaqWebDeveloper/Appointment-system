 @include('components/uhead')
<!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url('ufiles/img/bg-img/hero1.jpg');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Medical Services that <br>You can Trust 100%</h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                <a href="#" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Discover Medifile <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(ufiles/img/bg-img/breadcumb3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Medical Services that <br>You can Trust 100%</h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                <a href="#" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Discover Medifile <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(ufiles/img/bg-img/breadcumb1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Medical Services that <br>You can Trust 100%</h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                <a href="#" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Discover Medifile <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Book An Appoinment Area Start ***** -->
    <div class="medilife-book-an-appoinment-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="appointment-form-content">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 col-lg-9">
                                <div class="medilife-appointment-form">
                                    
                                    <form id="data">
                                        <div class="row align-items-end">
                                        <div class="col-12 col-md-4">
                                            <input id="date" type="hidden" name="date" value="{{$p}}">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-top-0border-right-0 border-left-0" name="pname" id="pname" placeholder="patient Name">
                                                    <small id="cpname" style="color:red;">must contain at least 3 letters and numbers are not allowed</small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="pfname" id="pfname" placeholder="patient FatherName">
                                                    
                                                </div>
                                                <small id="cpfname" style="color:red;">must contain at least 3 letters and numbers are not allowed</small>
                                            </div>
                                            
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="number" class="form-control border-top-0 border-right-0 border-left-0" name="pmobile" id="pmobile" placeholder="Phone">
                                                    <small id="cpmobile" style="color:red;">11 digits</small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="pgen">
                                                        <option value="">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="pdoc">
                                                    <option>Select Doctor</option>
                                                    @foreach($d as $data)
                                                    <option value="{{$data['dname']}}">{{$data['dname']}}&nbsp;({{$data['dspec']}})</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="form-group">
                                                    <input type="date" 
                                                     class="form-control"  name="pdate" id="pdate" placeholder="Date">
                                                    <small  style="color:red;" id="pdate"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 col-md-2">
                                                <div class="form-group">
                                                    <input type="Time" class="form-control" name="ptime" id="ptime" placeholder="Time">
                                                    <small  style="color:red;" id="ptime"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="pemail" id="pemail" placeholder="Email">
                                                    <small id="cpemail" style="color:red;">write correct pattern as example@domain.com</small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="ppass" id="ppass" placeholder="Password">
                                                    <small id="cppass" style="color:red;">must contain at least 8 characters including upper case ,lower case ,non repeated digit and a special symbol ,white spaces not allowed</small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="file" class="form-control border-top-0 border-right-0 border-left-0" name="ppic" id="ppic" placeholder="Pic">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <div class="form-group mb-0">
                                                    <textarea name="psymptoms" class="form-control mb-0 border-top-0 border-right-0 border-left-0" id="symptoms" cols="30" rows="10" placeholder="Symptoms"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 mb-0">
                                                <div class="form-group mb-0">
                                                    <button type="submit" id="sub" class="btn medilife-btn">Make an Appointment <span>+</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="medilife-contact-info">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="{{asset('ufiles/img/icons/alarm-clock.png')}}" alt="">
                                        <p>Mon - Sat 08:00 - 21:00 <br>Sunday CLOSED</p>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="{{asset('ufiles/img/icons/envelope.png')}}" alt="">
                                        <p>0080 673 729 766 <br>contact@business.com</p>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info">
                                        <img src="{{asset('ufiles/img/icons/map-pin.png')}}" alt="">
                                        <p>Lamas Str, no 14-18 <br>41770 Miami</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Book An Appoinment Area End ***** -->
    <!-- ***** Cool Facts Area Start ***** -->
    <section class="medilife-cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-blood-transfusion-2"></i>
                        <h2><span class="counter">5632</span></h2>
                        <h6>Blood donations</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-atoms"></i>
                        <h2><span class="counter">23</span>k</h2>
                        <h6>Pacients</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-microscope"></i>
                        <h2><span class="counter">25</span></h2>
                        <h6>Specialities</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-doctor-1"></i>
                        <h2><span class="counter">723</span></h2>
                        <h6>Doctors</h6>
                        <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** Gallery Area Start ***** -->
    <div class="medilife-gallery-area owl-carousel">
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="{{asset('ufiles/img/bg-img/g1.jpg')}}" alt="">
            <div class="view-more-btn">
                <a href="{{asset('ufiles/img/bg-img/g1.jpg')}}" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="{{asset('ufiles/img/bg-img/g2.jpg')}}" alt="">
            <div class="view-more-btn">
                <a href="{{asset('img/bg-img/g2.jpg')}}" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="{{asset('ufiles/img/bg-img/g3.jpg')}}" alt="">
            <div class="view-more-btn">
                <a href="{{asset('ufiles/img/bg-img/g3.jpg')}}" class="btn gallery-img">See More +</a>
            </div>
        </div>

        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="{{asset('ufiles/img/bg-img/g4.jpg')}}" alt="">
            <div class="view-more-btn">
                <a href="{{asset('ufiles/img/bg-img/g4.jpg')}}" class="btn gallery-img">See More +</a>
            </div>
        </div>
    </div>
    <!-- ***** Gallery Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <div class="medilife-features-area section-padding-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="features-content">
                        <h2>A new way to treat pacients in a revolutionary facility</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer.</p>
                        <a href="#" class="btn medilife-btn mt-50">View the services <span>+</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="features-thumbnail">
                        <img src="{{asset('ufiles/img/bg-img/medical1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Features Area End ***** -->
 
    <!-- ***** Footer Area Start ***** -->
    @include('components/ufoot')
<script>

</script>
    <script>
        let vname=false;
        let vfname=false;
        let vmobile=false;
        let vemail=false;
        let vpass=false;
        const cpname=document.getElementById('cpname');
        cpname.style.display="none";
        const pfname=document.getElementById('pfname');
        cpfname.style.display="none";
        const pmobile=document.getElementById('pmobile');
        cpmobile.style.display="none";
            // for name
    const pname=document.getElementById('pname');
    console.log(pname);
    pname.addEventListener('input',()=>{
    console.log("pname");
    let regx=/(^[a-zA-Z]{2,10}$)/;
    let strn=pname.value;
    // console.log(regx,strn);
    if(regx.test(strn)){
      console.log('matched');
      cpname.style.display="none";
      vname=true;
    }
    else{
      console.log('no match');
      cpname.style.display="block";
      vname=false;
    }
  });
   // for father name
    console.log(pfname);
    pfname.addEventListener('input',()=>{
    console.log("pfname");
    let regx=/(^[a-zA-Z]{2,10}$)/;
    let strn=pfname.value;
    // console.log(regx,strn);
    if(regx.test(strn)){
      console.log('matched');
      cpfname.style.display="none";
      vfname=true;
    }
    else{
      console.log('no match');
      cpfname.style.display="block";
      vfname=false;
    }
  });
  // for mobile
    // console.log(pmobile);
    pmobile.addEventListener('input',()=>{
    // console.log("pmobile");
    let regx=/(^[0-9]{11}$)/;
    let strn=pmobile.value;
    // console.log(regx,strn);
    if(regx.test(strn)){
      console.log('matched');
      cpmobile.style.display="none";
      vmobile=true;
    }
    else{
      console.log('no match');
      cpmobile.style.display="block";
      vmobile=false;
    }
  });

  //   for email
  const pemail=document.getElementById('pemail');
  cpemail.style.display="none";
// console.log(pemail);
pemail.addEventListener('input',()=>{
// console.log("pemail");
let regx=/^([_\.\-0-9-a-zA-Z]+)@([_\.\0-9-a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
let strn=pemail.value;
// console.log(regx,strn);
const cpemail=document.getElementById('cpemail');
if(regx.test(strn)){
console.log('matched');
cpemail.style.display="none";
vemail=true;
}
else{
console.log('no match');
cpemail.style.display="block";
vemail=false;
}
});

// for password
const ppass=document.getElementById('ppass');
cppass.style.display="none";
    // console.log(ppass);
    ppass.addEventListener('input',()=>{ 
    // console.log("ppass");
    let regx=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{8,}$/;
    let strn=ppass.value;
    // console.log(regx,strn);
    if(regx.test(strn)){
      console.log('matched');
      cppass.style.display="none";
      vpass=true;
    }
    else{
      console.log('no match');
      cppass.style.display="block";
      vpass=false;
    }
  });k

  let sub=document.getElementById('sub');
  sub.addEventListener('click',(e)=>{
    e.preventDefault();
    // console.log('u click on submit');
    if(vname && vfname && vmobile && vemail && vpass){
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
url:"{{url('/patient')}}",
method:"post",
contentType:false,
processData:false,
data:form,
success:function(res){
    if(res.date){
        alert(res.date);
    $('#pdate').kendoCalender({
        disableDates:function(date){
       var disabled=res.date;
       alert("this time is already taken");
        }
    });
}
    if(res.status=='insert'){
        alert(res.status);
      Swal.fire(
  'congrats!',
  'Data inserted!',
  'success'
)
    }
    else{
        Swal.fire({
  icon: 'error',
  title: 'Oops...',
text: 'something went wrong try again!',
});
    }
},
error: function(error) {
                    if(error.responseJSON.errors.pname){
                        $('#pname').text("name field cant be blank");
                    }
                    if(error.responseJSON.errors.pfname){
                        $('#pfname').text("father name field cant be blank");
                    }
                    if(error.responseJSON.errors.pgen){
                        $('#pgen').text("father name field cant be blank");
                    }
                    if(error.responseJSON.errors.pdoc){
                        $('#pdoc').text("doctors field cant be blank");
                    }
                    if(error.responseJSON.errors.pdate){
                        $('#pdate').text("date field cant be blank");
                    }
                    if(error.responseJSON.errors.ptime){
                        $('#ptime').text("time field cant be blank and it is already taken");
                    }
                    if(error.responseJSON.errors.pmobile){
                        $('#pmobile').text("mobile field cant be blank");
                    }
                    if(error.responseJSON.errors.pemail){
                        $('#pemail').text("email field cant be blank and email should be unique");
                    }
                    if(error.responseJSON.errors.ppass){
                        $('#ppass').text("pass field cant be blank");
                    }
                    if(error.responseJSON.errors.ppic){
                        $('#ppic').text("pic field cant be blank and picture must be of extension jpg/png/jpeg");
                    }


}
});
});
        });
    }
  });
          </script>