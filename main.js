(function($, window, document) {
  $('#spinner').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "api.php",
      data: JSON.stringify({
        "key": "hresocia",
        "text": $("#input").val()
      }),
      success: function(d) {
        if (d.success) {
          $("#result").val(d.spun);
        }
      },
      contentType: "application/json",
      dataType: "json"
    });
  });
})(window.jQuery, window, document);
