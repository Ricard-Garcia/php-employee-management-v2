$("#jsGrid").jsGrid({
  width: "100%",
  height: "auto",

  inserting: true,
  editing: false,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 10,
  pageButtonCount: 5,
  selecting: true,
  deleteConfirm: "Do you really want to delete data?",

  rowClick: function (element) {
    console.log(element.item.emp_no);
    window.location.href = "getById/" + element.item.emp_no;
  },

  controller: {
    loadData: function (filter) {
      return $.ajax({
        type: "GET",
        url: "getEmployees",
        data: filter,
        dataType: "json",
        success: function (resp) {
          console.log("GET: ", resp);
        },
      });
    },
    insertItem: function (item) {
      return $.ajax({
        type: "POST",
        url: "library/employeeController.php",
        data: item,
      });
    },
    updateItem: function (item) {
      return $.ajax({
        type: "PUT",
        url: "library/employeeController.php",
        data: item,
      });
    },
    deleteItem: function (item) {
      return $.ajax({
        type: "DELETE",
        url: "library/employeeController.php",
        data: item,
      });
    },
  },

  onItemInserted: function (args) {
    console.log(args);
  },

  // rowClick: function (args) {
  //   var getData = args.item;
  //   var keys = Object.keys(getData);
  //   var text = [];

  //   $.each(keys, function (index, value) {
  //     text.push(value + " : " + getData[value]);
  //   });
  //   alert(text.join(", "));
  // },

  fields: [
    {
      title: "id",
      name: "emp_no",
      css: "hidden-cell",
      align: "left",
      width: 50,
    },
    {
      title: "Name",
      name: "first_name",
      align: "left",
      type: "text",
      width: 100,
      validate: "required",
    },
    {
      title: "Last name",
      name: "last_name",
      css: "hidden-cell",
    },
    {
      title: "Email",
      name: "email",
      type: "text",
      width: 150,
      validate: "required",
    },
    {
      title: "Gender",
      name: "gender",
      type: "hidden",
      width: 70,
      css: "hidden-cell",
    },
    {
      title: "City",
      name: "city",
      type: "text",
      width: 150,
      validate: "required",
    },
    {
      title: "St. Adress",
      name: "streetAddress",
      type: "text",
      width: 80,
      validate: "required",
    },
    {
      title: "State",
      name: "state",
      type: "text",
      width: 80,
      validate: "required",
    },
    {
      title: "Age",
      name: "age",
      type: "number",
      width: 40,
      validate: "required",
    },
    {
      title: "P. code",
      name: "postal_code",
      type: "number",
      width: 150,
      align: "left",
      validate: "required",
    },
    {
      title: "Phone",
      name: "phone_number",
      type: "number",
      width: 150,
      align: "left",
      validate: "required",
    },
    {
      type: "control",
      width: 50,
      editButton: false,
    },
  ],
});
