const sendMail = async () => {
  const name = $("#name").val();
  const email = $("#email").val();
  const surname = $("#surname").val();
  const message = $("#message").val();

  await $.ajax({
    type: "POST",
    url: "/process/envoyer_mail.php",
    data: {
      email: email,
      name: name,
      surname: surname,
      message: message,
    },
    dataType: "json",
    success: function (response) {
      $("#error-content").empty();
      const p = $("<p>").text(response.message);
      $("#error-content").append(p);
    },
    error: function (jqXHR) {
      $("#error-content").empty();
      const p = $("<p>").text(response.message);
      $("#error-content").append(p);
    },
  });
};
$("#send").click(function (e) {
  e.preventDefault();
  sendMail();
});
