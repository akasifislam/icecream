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
            <form role="form" @click.prevent="addCategory()">
              <div class="card-body">
                <div class="form-group">
                  <label for="categoryId">Add New Category</label>
                  <input
                    type="name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('cat_name') }"
                    v-model="form.cat_name"
                    name="cat_name"
                    id="categoryId"
                    placeholder="Enter Category Name"
                  />
                  <has-error :form="form" field="cat_name"></has-error>
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
export default {
  name: "New",
  data() {
    return {
      form: new Form({
        cat_name: "",
      }),
    };
  },
  methods: {
    addCategory() {
      this.form.post("/add-category").then((response) => {
        this.$router.push("/category-list");
        Toast.fire({
          icon: "success",
          title: "Category add successfully",
        });
      });
    },
  },
};
</script>

<style>
</style>