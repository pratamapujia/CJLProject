// Tooltip
document.addEventListener(
  "DOMContentLoaded",
  function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  },
  false
);

// Custom Menu Active
var path = location.pathname.split("");
var url = location.origin + "/" + path[1];
$(".sidebar-menu ul li a").each(function () {
  if ($(this).attr("href").indexOf(url) !== -1) {
    $(this).parent().addClass("active").parent().parent("li").addClass("active");
  }
});

// Custom Preview
function previewImg() {
  const gambar = document.querySelector("#gambar");
  const gambarPreview = document.querySelector(".img-preview");
  const fileGambar = new FileReader();
  fileGambar.readAsDataURL(gambar.files[0]);
  fileGambar.onload = function (e) {
    gambarPreview.src = e.target.result;
  };
}

// Sweet Alert
const flashData = $(".flash-data").data("flashdata");
const Toast = Swal.mixin({
  toast: true,
  position: "top",
  background: "#4E9F3D",
  iconColor: "#fff",
  color: "#fff",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});
if (flashData) {
  Toast.fire({
    icon: "success",
    title: flashData,
  });
}
// $(document).on("onklik", "#btn-hapus", function (e) {
//   e.preventDefault();
//   var link = $(this).attr("href");

//   Swal.fire({
//     title: "Apakah Anda yakin?",
//     text: "Data ini akan dihapus!",
//     icon: "warning",
//     showCancelButton: true,
//     confirmButtonColor: "#3085d6",
//     cancelButtonColor: "#d33",
//     confirmButtonText: "Yakin",
//   }).then((result) => {
//     if (result.isConfirmed) {
//       window.location = link;
//     }
//   });
// });
