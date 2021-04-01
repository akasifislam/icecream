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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trident</td>
                <td>{{ allCategory }}</td>
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
export default {
  name: "List",
  mounted() {},
  computed: {
    allCategory() {
      return  this.$store.getters.getCategory
    }
  },
  methods: {},
};
</script>

<style>
</style>