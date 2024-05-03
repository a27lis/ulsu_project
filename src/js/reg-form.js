const regFormButton = document.getElementById("btn-reg-form"); // считываем кнопку

regFormButton.addEventListener("click", buttonHandler);

function buttonHandler() {
    var url = "reg.php";
    var data = {
        regFormEmail: $("[id=regFormEmail]").val(),
        regFormPassword: $("[id=regFormPassword]").val(),
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