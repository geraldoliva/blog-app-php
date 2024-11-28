<?php include 'partials/header.php'; ?>

    <section class="dashboard">
      <div class="container dashboard__container">
        <button class="sidebar__toggle" id="show__sidebar-btn">
          <i class="uil uil-angle-right-b"></i>
        </button>
        <button class="sidebar__toggle" id="hide__sidebar-btn">
          <i class="uil uil-angle-left-b"></i>
        </button>
        <aside>
          <ul>
            <li>
              <a href="add-post.html"
                ><i class="uil uil-pen"></i>
                <h5>Add Post</h5></a
              >
            </li>
            <li>
              <a href="dashboard.html"
                ><i class="uil uil-postcard"></i>
                <h5>Manage Posts</h5></a
              >
            </li>
            <li>
              <a href="add-user.html"
                ><i class="uil uil-user-plus"></i>
                <h5>Add User</h5></a
              >
            </li>
            <li>
              <a href="manage-users.html" class="active"
                ><i class="uil uil-users-alt"></i>
                <h5>Manage Users</h5></a
              >
            </li>
            <li>
              <a href="add-category.html"
                ><i class="uil uil-edit"></i>
                <h5>Add Category</h5></a
              >
            </li>
            <li>
              <a href="manage-categories.html" 
                ><i class="uil uil-list-ul"></i>
                <h5>Manage Categories</h5></a
              >
            </li>
          </ul>
        </aside>
        <main>
          <h2>Manage Users</h2>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Admin</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ernest Achiever</td>
                <td>achiever</td>
                <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.html" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Daniel Vinyo</td>
                <td>achiever</td>
                <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.html" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Jane Doe</td>
                <td>achiever</td>
                <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.html" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>No</td>
              </tr>
            </tbody>
          </table>
        </main>
      </div>
    </section>

   <?php include '../partials/footer.php'; ?>