<?php

function getEmployees()
{
  return file_get_contents('../../resources/employees.json');
}

function addEmployee($input)
{
  $json = json_decode(file_get_contents('../../resources/employees.json'));

  $data = array(
    'id' => count($json) + 1,
    'name' => $input['name'],
    'lastName' => $input['lastName'],
    'email' => $input['email'],
    'gender' => $input['gender'],
    'city' => $input['city'],
    'streetAddress' => $input['streetAddress'],
    'state' => $input['state'],
    'age' => $input['age'],
    'postalCode' => $input['postalCode'],
    'phoneNumber' => $input['phoneNumber']
  );

  array_push($json, $data);
  $fp = fopen("../../resources/employees.json", "w");
  fwrite($fp, json_encode($json));
  fclose($fp);
}


function deleteEmployee(string $id)
{
  $json = json_decode(file_get_contents('../../resources/employees.json'), TRUE);

  $result = array();

  foreach ($json as $item) {
    if ($item["id"] != $id) {
      array_push($result, $item);
    }
  }

  $fp = fopen("../../resources/employees.json", "w");
  fwrite($fp, json_encode($result));
  fclose($fp);
}


function updateEmployee($_PUT)
{
  $json = json_decode(file_get_contents('../../resources/employees.json'), TRUE);

  $data = array(
    'id' => $_PUT['id'],
    'name' => $_PUT['name'],
    'lastName' => $_PUT['lastName'],
    'email' => $_PUT['email'],
    'gender' => $_PUT['gender'],
    'city' => $_PUT['city'],
    'streetAddress' => $_PUT['streetAddress'],
    'state' => $_PUT['state'],
    'age' => $_PUT['age'],
    'postalCode' => $_PUT['postalCode'],
    'phoneNumber' => $_PUT['phoneNumber']
  );

  $result = array();

  foreach ($json as $item) {
    if ($item["id"] == $data["id"]) {
      $item = $data;
    }
    array_push($result, $item);
  }

  $fp = fopen("../../resources/employees.json", "w");
  fwrite($fp, json_encode($result));
  fclose($fp);
}


function getEmployee(string $id)
{
  $result = json_decode(file_get_contents('../resources/employees.json'), true);


  foreach ($result as $element) {
    if ($element["id"] == $id) {
      return $element;
    }
  }
}


// function removeAvatar($id)
// {
//   // TODO implement it
// }


// function getQueryStringParameters(): array
// {
//   // TODO implement it
// }

// function getNextIdentifier(array $employeesCollection): int
// {
//   // TODO implement it
// }
