@csrf
<v-layout row>
    <v-flex xs4>
        <v-subheader>Category Title</v-subheader>
        </v-flex>
    <v-flex xs8>
        <v-text-field
        name="title"
        label="Title"
        required
    ></v-text-field>
    </v-flex>
</v-layout>
<v-layout row>
    <v-flex xs4>
        <v-subheader>Category Description</v-subheader>
        </v-flex>
    <v-flex xs8>
        <v-text-field
            name="description"
            label="Description"
            multi-line
            rows="4"
        ></v-text-field>
    </v-flex>
</v-layout>
<v-layout row>
    <v-flex xs4>
        <v-subheader>Category Poster</v-subheader>
        </v-flex>
    <v-flex xs8>
        <image-upload v-bind:name="'poster'"></image-upload>
    </v-flex>
</v-layout>
<hr>
<v-btn color="info" class="m-0" type="submit">Submit</v-btn>