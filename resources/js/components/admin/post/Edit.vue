<template>
  <div>
    <section class="container">
      <div class="row justify-content-around mt-2">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Post</h3>
              <h3 class="card-title">{{ this.$route.params.postid }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form
              role="form"
              enctype="multipart/form-data"
              @submit.prevent="updatePost()"
            >
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
                  <!-- <textarea
                    type="name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('description') }"
                    v-model="form.description"
                    name="description"
                    id="postId3"
                    placeholder="Enter Category Name"
                  ></textarea> -->
                  <ckeditor
                    :editor="editor"
                    v-model="form.description"
                    :class="{ 'is-invalid': form.errors.has('description') }"
                    id="postId3"
                    name="description"
                    :config="editorConfig"
                  ></ckeditor>
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
                    @change="changePhoto($event)"
                    type="file"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('photo') }"
                  />
                  <img
                    :src="updateImage()"
                    v-if="form.photo"
                    alt="a"
                    width="150px"
                    height="90px"
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
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
export default {
  name: "Edit",
  data() {
    return {
      form: new Form({
        title: "",
        description: "",
        cat_id: "",
        photo: "",
      }),
      editor: ClassicEditor,
      editorConfig: {
        // The configuration of the editor.
      },
    };
  },
  mounted() {
    this.$store.dispatch("getAllCategory");
    axios.get(`/edit-post/${this.$route.params.postid}`).then((response) => {
      console.log(response.data);
      this.form.fill(response.data.post);
    });
    // this.allCategory();
  },
  //   created() {},
  computed: {
    allCategory() {
      return this.$store.getters.getCategory;
    },
  },
  methods: {
    changePhoto(event) {
      let file = event.target.files[0];
      if (file.size >= 1048576) {
        Swal.fire({
          text: "Image size larze!",
        });
      } else {
        let reader = new FileReader();
        reader.onload = (event) => {
          this.form.photo = event.target.result;
          console.log(event.target.result);
        };
        reader.readAsDataURL(file);
      }
    },
    updatePost() {
      this.form
        .post(`/update-post/${this.$route.params.postid}`)
        .then((response) => {
          this.$router.push("/post-list");
          Toast.fire({
            icon: "success",
            title: "Post updated",
          });
        })
        .catch((e) => {
          console.log(e);
        });
    },
    updateImage() {
      let image = this.form.photo;
      if (image.length > 100) {
        return this.form.photo;
      } else {
        return `uploadimage/${this.form.photo}`;
      }
    },
  },
};
</script>

<style>
</style>