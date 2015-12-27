@if (Session::has('message'))
    <script type="text/javascript">
        swal("", "{!! Session::get('message') !!}", "success");
    </script>
@endif