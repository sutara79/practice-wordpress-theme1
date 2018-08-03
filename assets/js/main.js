window.addEventListener("DOMContentLoaded", () => {
  // new MobileMenu({
  //   btn:       ".mobile-gnav-btn", // セレクタ
  //   btnOpen:   "icon-cross", // クラス名
  //   btnClose:  "icon-menu", // クラス名
  //   menu:      ".globalnavi", // セレクタ
  //   menuOpen:  "globalnavi-open", // クラス名
  //   menuClose: "globalnavi-close", // クラス名
  //   maxWidth:  1099
  // });
});


class MobileMenu {
  /**
   * モバイル向けメニュー
   *
   * @param {object} option オプションをまとめたオブジェクト
   */
  constructor(option) {
    this.option = option;

    this.elBtn = document.querySelector(this.option.btn);
    this.elMenu = document.querySelector(this.option.menu);

    this.eventBtn();
  }

  /**
   * メニューを表示する
   */
  eventBtn() {
    this.elBtn.addEventListener("click", (ev) => {
      if (this.elBtn.classList.contains(this.option.btnOpen)) {
        this.closeMenu();
      } else {
        this.openMenu();
      }
    });
  }

  openMenu() {
    this.elMenu.classList.remove(this.option.menuClose);
    this.elMenu.classList.add(this.option.menuOpen);
    this.elBtn.classList.remove(this.option.btnClose);
    this.elBtn.classList.add(this.option.btnOpen);
  }

  closeMenu() {
    this.elMenu.classList.add(this.option.menuClose);
    this.elMenu.classList.remove(this.option.menuOpen);
    this.elBtn.classList.add(this.option.btnClose);
    this.elBtn.classList.remove(this.option.btnOpen);
  }
}