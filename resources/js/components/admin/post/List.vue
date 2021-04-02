<template>
  <div>
    <div class="container">
      <div class="card mt-4">
        <div class="card-header">
          <h3 class="card-title">Category List</h3>
          <div class="card-tools">
            <button class="btn btn-success btn-sm">
              <router-link
                class="text-white text-decoration-none"
                to="/post-add"
                >add post</router-link
              >
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl</th>
                <th>User</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Photo</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><code>User name</code></td>
                <td>Category name</td>
                <td>Title</td>
                <td>Description</td>
                <td>Photo</td>
                <td>
                  <!-- <router-link :to="`/category-edit/${category.id}`" class="btn btn-success btn-sm">edit</router-link>
                  <a
                    @click.prevent="deleteCategory(category.id)"
                    class="btn btn-primary btn-sm"
                    >delete</a
                  > -->
                  <a href="">edit</a>
                  <a href="">delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>