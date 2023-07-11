 <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/mastaring/backend')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('public/mastaring/backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/mastaring/backend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('public/mastaring/backend')}}/vendor/chart.js/Chart.min.js"></script>
  <script src="{{asset('public/mastaring/backend')}}/vendor/datatables/jquery.dataTables.js"></script>
  <script src="{{asset('public/mastaring/backend')}}/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/mastaring/backend')}}/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('public/mastaring/backend')}}/js/demo/datatables-demo.js"></script>
  <script src="{{asset('public/mastaring/backend')}}/js/demo/chart-area-demo.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

    <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  




      <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
