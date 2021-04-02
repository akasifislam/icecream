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
                to="/category-add"
                >Category</router-link
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
                <th>Category Name</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(category, index) in allCategory" :key="index">
                <td>{{ index + 1 }}</td>
                <td>{{ category.cat_name }}</td>
                <td>{{ category.created_at | timeformat }}</td>
                <td>
                  <a href="" class="btn btn-success btn-sm">edit</a>
                  <a
                    @click.prevent="deleteCategory(category.id)"
                    class="btn btn-primary btn-sm"
                    >delete</a
                  >
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
export default {
  name: "List",
  mounted() {
    this.$store.dispatch("getAllCategory");
  },
  computed: {
    allCategory() {
      return this.$store.getters.getCategory;
    },
  },
  methods: {
    deleteCategory(id) {
      axios.get("/delete-category/" + id).then(() => {
        this.$store.dispatch("getAllCategory");
        Toast.fire({
          icon: "success",
          title: "Category deleted successfully",
        });
      });
    },
  },
};
</script>

<style>
</style>