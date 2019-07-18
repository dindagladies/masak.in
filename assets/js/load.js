function loadMenu(url) {
    $.ajax(url, {
        type: 'GET', 
        success: function (data, status, xhr) {
          $('#konten').html(data);
        },
        error: function (jqXhr, textStatus, errorMessage) {
          alert('Error : ' + errorMessage);
        }
      });
  }