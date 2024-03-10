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
              <h3 class="page-title"> SubCategory view</h3>
              <div class="btn btn-primary"><a class="text-white" href="{{url('/sub/create')}}">Add New</a></div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped text-white" id="example" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Gender</th>
                            <th>Speciality</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>password</th>
                            <th>role</th>
                            <th>Pic</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($d as $s)
                          <tr>
                            <td>{{$s['dname']}}</td>
                            <td>{{$s['dfname']}}</td>
                            <td>{{$s['dgen']}}</td>
                            <td>{{$s['dspec']}}</td>
                            <td>{{$s['dmobile']}}</td>
                            <td>{{$s['demail']}}</td>
                            <td>{{$s['dpass']}}</td>
                            <td>{{$s['drole']}}</td>
                            <td><img src="{{asset('imgs/'.$s['dpic'])}}" width="50px" height="50px"></td>
                            <td><a class="btn btn-primary" href="{{url('doc/'.$s->did.'/edit') }}">UPDATE</a></td>
                            <td><button class="btn btn-danger del" data-del="{{$s['did']}}">DELETE</button></td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @include('components/footer')
        
        <script>
            $(document).on("click",".del",function(){
var del=$(this).data("del");
alert(del);
var msg=this;
$.ajaxSetup({
headers:
{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
url: "/doc/" + del,
method: "DELETE",
success: function(r){
  alert(r.status);
  if(r.status==2){
    $(msg).closest("tr").fadeOut();
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
}
});
    
}
});
            });
        </script>
          <!-- content-wrapper ends -->
      