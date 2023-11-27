<?php /* Le code PHP que vous avez fourni */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Admin Dashboard</title>
</head>
<body class="bg-gray-200 h-screen">

  <div class="flex h-full">

    <!-- Sidebar -->
    <div class="bg-gray-800 text-white p-4 w-64">
      <h2 class="text-2xl font-bold">Admin Dashboard</h2>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
      <h1 class="text-3xl font-bold mb-8">Agence System</h1>

      <!-- Agence Creation Form -->
      <div class="mb-8 bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Create Agence</h2>
        <form>

          <!-- Longitude Input -->
          <div class="mb-4">
            <label for="longitude" class="block text-gray-700 text-sm font-bold mb-2">Longitude:</label>
            <input type="text" id="longitude" class="w-full p-2 border border-gray-300 rounded">
          </div>

          <!-- Latitude Input -->
          <div class="mb-4">
            <label for="latitude" class="block text-gray-700 text-sm font-bold mb-2">Latitude:</label>
            <input type="text" id="latitude" class="w-full p-2 border border-gray-300 rounded">
          </div>

          <div class="mb-4">
            <label for="latitude" class="block text-gray-700 text-sm font-bold mb-2">Bank name:</label>
            <input type="text" id="latitude" class="w-full p-2 border border-gray-300 rounded">
          </div>

          <!-- Submit Button -->
          <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Agence</button>
        </form>
      </div>

      <!-- Display Agences Section -->
      <div>
        <h2 class="text-2xl font-semibold mb-4">List of Agences</h2>

        <!-- Fake Data for Display in a Table -->
        <table class="min-w-full bg-white border border-gray-300">
          <thead>
            <tr>
              <th class="py-2 px-4 border-b">ID</th>
              <th class="py-2 px-4 border-b">Longitude</th>
              <th class="py-2 px-4 border-b">Latitude</th>
              <th class="py-2 px-4 border-b">Bank name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2 px-4 border-b">1</td>
              <td class="py-2 px-4 border-b">-6.8325</td>
              <td class="py-2 px-4 border-b">33.9878</td>
              <th class="py-2 px-4 border-b">CIH Bank</th>
            </tr>
            
          </tbody>
        </table>

      </div>
    </div>

  </div>

</body>
</html>
