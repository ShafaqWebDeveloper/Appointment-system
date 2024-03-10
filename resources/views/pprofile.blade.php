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
              <h3 class="page-title">Patient View</h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped text-white" id="example" style="width:100%;">
                        <thead>
                          <tr><th>Doctor Name</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Gender</th>
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
                          @foreach($p as $s)    
                          <tr>
                          <td>{{$s['pdoc']}}</td>
                            <td>{{$s['pname']}}</td>
                            <td>{{$s['pfname']}}</td>
                            <td>{{$s['pgen']}}</td>
                            <td>{{$s['pmobile']}}</td>
                            <td>{{$s['pemail']}}</td>
                            <td>{{$s['ppass']}}</td>
                            <td>{{$s['prole']}}</td>
                            <td><img src="{{asset('imgs/'.$s['ppic'])}}" width="50px" height="50px"></td>
                            <td><a class="btn btn-primary" href="{{url('doc/'.$s->pid.'/edit') }}">UPDATE</a></td>
                            <td><button class="btn btn-danger del" data-del="{{$s['pid']}}">DELETE</button></td>
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
url:"/patient/"+del,
method: "DELETE",
success: function(r){
  alert(r);
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
      