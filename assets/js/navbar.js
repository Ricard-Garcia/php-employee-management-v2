var current = window.location.href;
current = current.split("/");
var last = current.length;
if (current[last - 1].includes("dashboard")) {
  $("#dash").addClass("active");
  $("#emp").removeClass("active");
}

if (current[last - 1].includes("employee")) {
  $("#emp").addClass("active");
  $("#dash").removeClass("active");
}

var timer = setInterval(function () {
  auto_logout();
}, 100000);
function reset_interval() {
  clearInterval(timer);

  timer = setInterval(function () {
    auto_logout();
  }, 100000);
}

function auto_logout() {
  if (
    confirm("You have been logged out from the application due to inactivity")
  ) {
    window.location = "library/sessionHelper.php?logout=true";
  }
}
