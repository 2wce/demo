$().ready(function(){
    $('#msform').validate({
        rules: {
          email: {
            required: true,
            email: true
          },

          password: {
            required: true,
            minlength: 5
          },

          cpass: {
            required: true,
            minlength: 5,
            equalTo: "#password"
          }


        }
    })
});
