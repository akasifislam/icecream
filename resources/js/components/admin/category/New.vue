<template>
  <div>
    <section class="container">
      <div class="row justify-content-around mt-2">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="categoryId">Add New Category</label>
                  <input
                    type="name"
                    class="form-control"
                    id="categoryId"
                    placeholder="Enter Category Name"
                  />
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>