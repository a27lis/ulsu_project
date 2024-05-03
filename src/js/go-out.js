const goOutButton = document.getElementById("btn-go-out"); // считываем кнопку

goOutButton.addEventListener("click", buttonHandler);

function buttonHandler() {
    var url = "go-out.php";

    $.ajax({
        url: url,
        type: "POST",
        success: () => {
            location.reload();
        },
      });
}