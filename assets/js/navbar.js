var current = window.location.href;

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
    if (current.includes("employees")) {
      window.location =
        "http://localhost:8888/php-employee-management-v2/login/logOut?logout=true";
    }
  }
}
