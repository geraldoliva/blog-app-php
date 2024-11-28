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
              <a href="dashboard.html" class="active"
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
              <a href="manage-users.html"
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
          <h2>Manage Posts</h2>
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                <td>Wild Life</td>
                <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.html" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                <td>Wild Life</td>
                <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.html" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                <td>Wild Life</td>
                <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.html" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                <td>Wild Life</td>
                <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.html" class="btn sm danger"
                    >Delete</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </main>
      </div>
    </section>

   <?php include '../partials/footer.php'; ?>