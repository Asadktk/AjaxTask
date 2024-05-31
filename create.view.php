<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Document</title>
</head>

<body class="h-full">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Add Employee</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form id="employeeForm" class="space-y-6">
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name:</label>
        <div class="mt-2">
          <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <p id="nameError" class="mt-2 text-sm text-red-600 hidden">Name is required.</p>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email:</label>
        </div>
        <div class="mt-2">
          <input id="email" name="email" type="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <p id="emailError" class="mt-2 text-sm text-red-600 hidden">Email is required.</p>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="department" class="block text-sm font-medium leading-6 text-gray-900">Department:</label>
        </div>
        <div class="mt-2">
          <input id="department" name="department" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          <p id="departmentError" class="mt-2 text-sm text-red-600 hidden">Department is required.</p>
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>

    <div id="responseMessage" style="margin-top: 20px;"></div>
  </div>
</div>

<script src="./js/ajax.js"></script>

</body>

</html>