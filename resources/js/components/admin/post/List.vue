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
              <tr v-for="(post, index) in allPost" :key="index">
                <td>{{ index + 1 }}</td>
                <td>
                  <code>{{ post.user.name }}</code>
                </td>
                <td>{{ post.category.cat_name }}</td>
                <td>{{ post.title }}</td>
                <td>{{ post.description | shortlength(20, "....") }}</td>
                <td>
                  <img
                    :src="uploadImage(post.photo)"
                    width="80"
                    height="70"
                    alt=""
                  />
                </td>
                <td>
                  <!-- <router-link :to="`/category-edit/${category.id}`" class="btn btn-success btn-sm">edit</router-link>
                  <a
                    @click.prevent="deleteCategory(category.id)"
                    class="btn btn-primary btn-sm"
                    >delete</a
                  > -->
                  <router-link :to="`/post-edit/${post.id}`">edit</router-link>
                  <a
                    href=""
                    @click.prevent="deletePost(post.id)"
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
    this.$store.dispatch("getaAllPost");
  },
  computed: {
    allPost() {
      return this.$store.getters.getPost;
    },
  },
  methods: {
    uploadImage(img) {
      return "uploadimage/" + img;
    },
    deletePost(id) {
      axios
        .get("/delete-post/" + id)
        .then((response) => {
          this.$store.dispatch("getaAllPost");
          this.$router.push("/post-list");
          Toast.fire({
            icon: "success",
            title: "Post Deleted",
          });
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
};
</script>

<style>
</style>