// устанавливаем триггер для модального окна (название можно изменить)
const modalTrigger = document.getElementsByClassName("btn-reg")[0];
const modalTriggerS = document.getElementsByClassName("btn-sign-in")[0];

// получаем ширину отображенного содержимого и толщину ползунка прокрутки
const windowInnerWidth = document.documentElement.clientWidth;
const scrollbarWidth =
  parseInt(window.innerWidth) - parseInt(document.documentElement.clientWidth);

// привязываем необходимые элементы
const bodyElementHTML = document.getElementsByTagName("body")[0];
const modalBackground = document.getElementsByClassName("modalBackground")[0];
const modalClose = document.getElementsByClassName("modalClose")[0];
const modalActive = document.getElementsByClassName("modalActive")[0];
const modalBackgroundS = document.getElementsByClassName("modalBackgroundS")[0];
const modalCloseS = document.getElementsByClassName("modalCloseS")[0];
const modalActiveS = document.getElementsByClassName("modalActiveS")[0];

// функция для корректировки положения body при появлении ползунка прокрутки
function bodyMargin() {
  bodyElementHTML.style.marginRight = "-" + scrollbarWidth + "px";
}

// при длинной странице - корректируем сразу
bodyMargin();
// событие нажатия на триггер открытия модального окна
modalTrigger.addEventListener("click", function () {
  // делаем модальное окно видимым
  modalBackground.style.display = "block";

  // если размер экрана больше 1366 пикселей (т.е. на мониторе может появиться ползунок)
  if (windowInnerWidth >= 1366) {
    bodyMargin();
  }

  // позиционируем наше окно по середине, где 175 - половина ширины модального окна
  modalActive.style.left = "calc(50% - " + (175 - scrollbarWidth / 2) + "px)";
});

modalTriggerS.addEventListener("click", function () {
  // делаем модальное окно видимым
  modalBackgroundS.style.display = "block";

  // если размер экрана больше 1366 пикселей (т.е. на мониторе может появиться ползунок)
  if (windowInnerWidth >= 1366) {
    bodyMargin();
  }

  // позиционируем наше окно по середине, где 175 - половина ширины модального окна
  modalActiveS.style.left = "calc(50% - " + (175 - scrollbarWidth / 2) + "px)";
});
// нажатие на крестик закрытия модального окна
modalClose.addEventListener("click", function () {
  modalBackground.style.display = "none";
  if (windowInnerWidth >= 1366) {
    bodyMargin();
  }
});
modalCloseS.addEventListener("click", function () {
  modalBackgroundS.style.display = "none";
  if (windowInnerWidth >= 1366) {
    bodyMargin();
  }
});



// закрытие модального окна на зону вне окна, т.е. на фон
modalBackground.addEventListener("click", function (event) {
  if (event.target === modalBackground) {
    modalBackground.style.display = "none";
    if (windowInnerWidth >= 1366) {
      bodyMargin();
    }
  }
});
modalBackgroundS.addEventListener("click", function (event) {
  if (event.target === modalBackgroundS) {
    modalBackgroundS.style.display = "none";
    if (windowInnerWidth >= 1366) {
      bodyMargin();
    }
  }
});
