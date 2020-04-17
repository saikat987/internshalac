$(document)
.on("submit", "form.js-register", function(event) {
  event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);

  var dataObj = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val(),
    first_name:$("input[name='first_name']",_form).val(),
    last_name:$("input[name='last_name']",_form).val(),
    phone_no:$("input[name='phone_no']",_form).val(),

  };

  if(dataObj.email.length < 6) {
    _error
      .text("Please enter a valid email address")
      .show();
    return false;
  } else if (dataObj.password.length < 6) {
    _error
      .text("Please enter a password that is at least 6 characters long.")
      .show();
    return false;
  }

  // Assuming the code gets this far, we can start the ajax process
  _error.hide();

  $.ajax({
    type: 'POST',
    url: $(this).attr("action"),
    data: dataObj,
    async: true,
  })
  .done(function ajaxDone(data) {

    if(data.redirect){window.location = data.redirect;}

    if(data.error){_error
        .html(data.error)
        .show();}
  })
  .fail(function ajaxFailed(e) {
    // This failed 
    
    console.log("fail");
  })
  .always(function ajaxAlwaysDoThis(data) {
    // Always do
    console.log("always");
  })

  return false;
})
// 


















.on("submit", "form.js-login", function(event) {
  event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);

  var dataObj = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val(),
    

  };

  if(dataObj.email.length < 6) {
    _error
      .text("Please enter a valid email address")
      .show();
    return false;
  } else if (dataObj.password.length < 6) {
    _error
      .text("Please enter a passphrase that is at least 6 characters long.")
      .show();
    return false;
  }

  // Assuming the code gets this far, we can start the ajax process
  _error.hide();

  $.ajax({
    type: 'POST',
    url: $(this).attr("action"),
    data: dataObj,
    dataType: 'json',
    async: true,
  })
  .done(function ajaxDone(data) {
    if(data.redirect !== undefined) {
      window.location = data.redirect;
    } else if(data.error !== undefined) {
      _error
        .html(data.error)
        .show();
    }
  })
  .fail(function ajaxFailed(e) {
    // This failed 
  })
  .always(function ajaxAlwaysDoThis(data) {
    // Always do
    console.log('Always');
  })

  return false;
})
