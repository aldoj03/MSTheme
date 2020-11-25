window.onload = () => {
  const url = window.location.href;
  const postsContainer = document.querySelector(".posts__container");
  const btns = document.querySelectorAll(
    ".blog__section__buttons__container button"
  );
  btns.forEach((val) => {
    val.addEventListener("click", (btn) => {
      postsContainer.classList.add("loading");

      jQuery.ajax({
        type: "POST",
        url: `${url}/wp-admin/admin-ajax.php`,
        dataType: "html",
        data: {
          action: "filter_projects",
          category: btn.target.getAttribute("data-cat"),
        },
        success: function (res) {
          page = 2;
          postsContainer.innerHTML = res;
          postsContainer.scrollIntoView();
          postsContainer.classList.remove("loading");
          if (res == "empty") {
            postsContainer.innerHTML =
              '<h3 style="text-align:center; color:#074E89">No hay artículos de esta categoria</h3>';
          }
        },
      });
      btns.forEach((val2) => {
        val2.classList.remove("active");
        val2.disabled = false;
      });
      btn.target.classList.add("active");
      btn.target.disabled = true;
    });
  });

  if (document.querySelector(".search-field")) {
    document.querySelector(".search-field").placeholder = "";
  }

  document.querySelectorAll(".menu-toggle").forEach((val) => {
    val.addEventListener("click", () => {
      document.querySelector("#menu2").classList.toggle("toggled");
    });
  });
};
