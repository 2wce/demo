
  
<script src="{{ URL::asset('portal/js/jquery.js') }}"></script>
<script src="{{ URL::asset('portal/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('portal/js/svgcheckbx.js') }}"></script>

<script>
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
</script>



<link rel="stylesheet" href="{{ URL::asset('portal/css/css.tel/intlTelInput.css') }}" />

<script src="{{ URL::asset('portal/js/js.tel/intlTelInput.js') }}"></script>
<script>
//function for the country codes for telephone number
$(function() {
$("#txtphonenumber").intlTelInput({
allowExtensions: true,
autoFormat: false,
autoHideDialCode: false,
autoPlaceholder: false,
defaultCountry: "auto",
ipinfoToken: "yolo",
nationalMode: false,
numberType: "MOBILE",
preventInvalidNumbers: true,
utilsScript: "{{ URL::asset('portal/js/js.tel/utils.js') }}"
});
});
</script>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
