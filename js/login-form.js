const loginFormButton = document.getElementById("btn-sign-in-form"); // считываем кнопку

loginFormButton.addEventListener("click", buttonHandler);

function buttonHandler() {
    var url = "login.php";
    var data = {
      loginFormEmail: $("[id=loginFormEmail]").val(),
      loginFormPassword: $("[id=loginFormPassword]").val(),
    };

    $.ajax({
      url: url,
      type: "POST",
      data: data,
      dataType: "json",
      success: (response) => {
        if (response["res"] == true) {
            location.reload();
        }
      },
    });
}