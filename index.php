<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/tailwind.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class=" p-6">




  <div class="max-w-5xl mx-auto bg-white  shadow overflow-hidden flex flex-col md:flex-row signup-container">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
      <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>

      <form action="add_user.php" method="post" enctype="multipart/form-data" class="space-y-6">


        <div class="flex gap-4">
          <div class="relative w-1/2">
            <i class="fa fa-user absolute left-2 top-1 text-gray-400"></i>
            <input type="text" name="first_name" placeholder="First Name" required
              class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none transition duration-300">
          </div>

          <div class="relative w-1/2">
            <i class="fa fa-user absolute left-2 top-1 text-gray-400"></i>
            <input type="text" name="last_name" placeholder="Last Name" required
              class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none transition duration-300">
          </div>
        </div>


        <div class="flex gap-4">
          <div class="relative w-1/2">
            <i class="fa fa-calendar absolute left-2 top-1 text-gray-400"></i>
            <input type="date" name="dob" required
              class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none transition duration-300">
          </div>

          <div class="relative w-1/2">
            <i class="fa fa-venus-mars absolute left-2 top-1 text-gray-400"></i>
            <select name="gender" required
              class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none bg-transparent transition duration-300">
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>


        <div class="relative">
          <i class="fa fa-envelope absolute left-2 top-1 text-gray-400"></i>
          <input type="email" name="email" placeholder="Email" required
            class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none transition duration-300">
        </div>


        <div class="relative">
          <i class="fa fa-lock absolute left-2 top-1 text-gray-400"></i>
          <input type="password" name="password" placeholder="Password" required
            class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none transition duration-300">
        </div>


        <div class="relative">
          <i class="fa fa-phone absolute left-2 top-1 text-gray-400"></i>
          <input type="text" name="phone" placeholder="Phone Number" required
            class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none transition duration-300">
        </div>


        <div class="relative">
          <i class="fa fa-image absolute left-2 top-1 text-gray-400"></i>
          <input type="file" name="profile_pic"
            class="pl-8 pb-2 border-b border-gray-400 focus:border-blue-500 w-full outline-none transition duration-300">
        </div>


        <button type="submit"
          class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full transition duration-300">
          <i class="fa fa-paper-plane mr-2"></i> Register
        </button>
      </form>
    </div>




    <div class="w-full md:w-1/2 bg-no-repeat bg-center" style="background-image: url('images/signup-image.jpg');">
    </div>
  </div>





  <div class="max-w-5xl mx-auto mt-8 bg-white p-6 signup-container shadow">
    <h2 class="text-2xl font-bold mb-4 text-center">Registered Users</h2>
    <ul role="list" class="divide-y divide-gray-200">
      <?php
      $res = $conn->query("SELECT * FROM users ORDER BY created_at DESC");
      while ($row = $res->fetch_assoc()) {
        echo '<li class="flex justify-between items-center py-4">
                    <!-- Left side: profile, name, email -->
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">';
        if ($row['profile_pic']) {
          echo "<img class='h-12 w-12 rounded-full' src='uploads/{$row['profile_pic']}' alt='Profile'>";
        } else {
          echo "<span class='inline-block h-12 w-12 rounded-full bg-gray-300'></span>";
        }
        echo '</div>
                        <div class="min-w-0">
                            <p class="text-sm font-medium text-gray-900">' . $row['first_name'] . ' ' . $row['last_name'] . '</p>
                            <p class="text-sm text-gray-500">' . $row['email'] . '</p>
                        </div>
                    </div>

                    <!-- Right side: created & updated -->
                    <div class="text-right space-y-1">
                        <p class="text-sm text-gray-500">Submitted: ' . date("d M Y", strtotime($row['created_at'])) . '</p>
                        <p class="text-sm text-gray-500">Last Update: ' . date("d M Y", strtotime($row['updated_at'])) . '</p>
                        <div class="flex space-x-2 mt-1">
                            <button onclick="editUser(' . $row['id'] . ')" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                            <a href="delete_user.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure?\')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</a>
                        </div>
                    </div>
                </li>';
      }
      ?>
    </ul>
  </div>


  <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white p-6 rounded w-96 relative">
      <span onclick="closeModal()" class="absolute top-2 right-3 cursor-pointer font-bold text-lg">&times;</span>
      <h3 class="text-xl font-bold mb-4">Edit User</h3>
      <form id="editForm" action="edit_user.php" method="post" enctype="multipart/form-data" class="space-y-4">
        <input type="hidden" name="id" id="edit_id">
        <input type="text" name="first_name" id="edit_first_name" placeholder="First Name" required
          class="border p-2 rounded w-full">
        <input type="text" name="last_name" id="edit_last_name" placeholder="Last Name" required
          class="border p-2 rounded w-full">
        <input type="date" name="dob" id="edit_dob" required class="border p-2 rounded w-full">
        <select name="gender" id="edit_gender" required class="border p-2 rounded w-full">
          <option value="">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <input type="email" name="email" id="edit_email" placeholder="Email" required class="border p-2 rounded w-full">
        <input type="text" name="phone" id="edit_phone" placeholder="Phone Number" required
          class="border p-2 rounded w-full">
        <input type="file" name="profile_pic" class="border p-2 rounded w-full">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
      </form>
    </div>
  </div>

  <script src="js/script.js"></script>
</body>

</html>