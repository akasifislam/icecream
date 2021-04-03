<template>
  <div>
    <section class="container">
      <div class="row justify-content-around mt-2">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="postId">Title</label>
                  <input
                    type="name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('title') }"
                    v-model="form.title"
                    name="title"
                    id="postId"
                    placeholder="Enter Category Name"
                  />
                  <has-error :form="form" field="title"></has-error>
                </div>
                <div class="form-group">
                  <label for="postId3">Description</label>
                  <textarea
                    type="name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('description') }"
                    v-model="form.description"
                    name="description"
                    id="postId3"
                    placeholder="Enter Category Name"
                  ></textarea>
                  <has-error :form="form" field="description"></has-error>
                </div>
                <div class="form-group">
                  <label for="cat_id1">Select Category</label>
                  <select
                    class="form-control"
                    v-model="form.cat_id"
                    :class="{ 'is-invalid': form.errors.has('cat_id') }"
                    name=""
                    id=""
                  >
                    <option disabled value="">----- select -----</option>
                    <option
                      v-for="(category, index) in allCategory"
                      :key="index"
                      :value="category.id"
                    >
                      {{ category.cat_name }}
                    </option>
                  </select>
                  <has-error :form="form" field="cat_id"></has-error>
                </div>
                <div class="form-group">
                  <label for="postId">Photo</label>
                  <input
                    type="file"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('photo') }"
                  />
                  <has-error :form="form" field="title"></has-error>
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
        title: "",
        description: "",
        cat_id: "",
        photo: "",
      }),
    };
  },
  mounted() {
    this.$store.dispatch("getAllCategory");
    // this.allCategory();
  },
  computed: {
    allCategory() {
      return this.$store.getters.getCategory;
    },
  },
  methods: {},
};
</script>

<style>
</style>