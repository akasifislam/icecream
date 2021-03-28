<template>
  <div>
    <div class="container">
      <div class="card mt-4">
        <div class="card-header">
          <h3 class="card-title">Category List</h3>
          <div class="card-tools">
              <button class="btn btn-success btn-sm">add category</button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl</th>
                <th>Category Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trident</td>
                <td>InternetExplorer</td>
                <td>
                    <a href="" class="btn btn-success btn-sm">edit</a>
                    <a href="" class="btn btn-primary btn-sm">delete</a>
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