<template>
  <div>
    <section class="container">
      <div class="row justify-content-around mt-2">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" @submit.prevent="editCategory()">
              <div class="card-body">
                <div class="form-group">
                  <label for="categoryId">Edit Category</label>
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
  name: "Edit",
  mounted() {
    axios
      .get(`/edit-category/${this.$route.params.categoryid}`)
      .then((response) => {
        this.form.fill(response.data.category);
      });
  },
  data() {
    return {
      form: new Form({
        cat_name: "",
      }),
    };
  },
  methods: {
    editCategory() {
      this.form
        .post(`/update-category/${this.$route.params.categoryid}`)
        .then((response) => {
          this.$router.push("/category-list");
          Toast.fire({
            icon: "success",
            title: "Category Edited",
          });
        });
    },
  },
};
</script>

<style>
</style>