// this variable will store images for preview
var images = [];

// this function will select images
function image_select() {
    var image = document.getElementById('image').files;

    for (i = 0; i < image.length; i++) {
          if (check_duplicate(image[i].name)) {
     images.push({
                  "name" : image[i].name,
                  "url" : URL.createObjectURL(image[i]),
                  "file" : image[i],
            })
          } else 
          {
               alert(image[i].name + " is already added to the list");
          }
    }

    // document.getElementById('form').reset();
    document.getElementById('container').innerHTML = image_show();
    document.getElementById("img-box").style.display = "block"; //this is used for display the images inside the box when we display it none from the style.

}

// this function will show images in the DOM
function image_show() {
    var image = "";
    images.forEach((i) => {
         image += `<div class="image_container d-flex justify-content-center position-relative">
                <img src="`+ i.url +`" alt="Image">
                <div class="remove-img"><span class="position-absolute" onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span></div>
          </div>`;
    })
    return image;
}

// this function will delete a specific image from the container
function delete_image(e) {
    images.splice(e, 1);
    document.getElementById('container').innerHTML = image_show();

    const dt = new DataTransfer()
    const input = document.getElementById('image')
    const { files } = input

    for (let i = 0; i < files.length; i++) {
        const file = files[i]
        if (e !== i)
        dt.items.add(file);
    }

    input.files = dt.files;
    console.log(document.getElementById('image').files);

    
    // if the we don't choose any file remove the div.
    if(images.length == 0){
        document.getElementById("img-box").style.display = "none";
    }

    // document.getElementById('multifile').value = "";
    // let fileArray = Array.from(fileList);

    // removeFileFromFileList(index) {
    //     const dt = new DataTransfer()
    //     const input = document.getElementById('files')
    //     const { files } = input
        
    //     for (let i = 0; i < files.length; i++) {
    //       const file = files[i]
    //       if (index !== i)
    //         dt.items.add(file) // here you exclude the file. thus removing it.
    //     }
        
    //     input.files = dt.files // Assign the updates list
    //   }

    // const input = document.getElementById('files')
    // // as an array, u have more freedom to transform the file list using array functions.
    // const fileListArr = Array.from(input.files)
    // fileListArr.splice(index, 1) // here u remove the file
    // console.log(fileListArr)


    // var newFileList = Array.from(event.target.files);
    // newFileList.splice(index,1);


    // <input class="rangelog btn border-aero" id="file_fr" name="file_fr[]" multiple type="file" placeholder="{$labels_helpfiles_placeholder_file}">
    // <span style="cursor: pointer; cursor: hand;" onclick="cleanInputs($('#file_fr'))"><i class="fa fa-trash"></i> Empty chosen files</span>
    // function cleanInputs(fileEle){
    //     $(fileEle).val("");
    //     var parEle = $(fileEle).parent();
    //     var newEle = $(fileEle).clone()
    //     $(fileEle).remove();
    //     $(parEle).prepend(newEle);
    // }


    // fileEle.value = "";
    // var parEle = $(fileEle).parent();
    // var newEle = $(fileEle).clone()
    // $(fileEle).remove();
    // parEle.append(newEle);

}

// this function will check duplicate images
function check_duplicate(name) {
    var image = true;
    if (images.length > 0) {
        for (e = 0; e < images.length; e++) {
            if (images[e].name == name) {
                image = false;
                break;
            }
        }
    }
    return image;
}

// this function will get all images from the array
function get_image_data() {
    var form = new FormData()
   for (let index = 0; index < images.length; index++) {
       form.append("file[" + index + "]", images[index]['file']);
   }
   return form;
}

// $("form").on("submit", function (e) {
//     e.preventDefault();
//     $.ajax({
//         url: "upload.php",
//         type: "POST",
//         processData: false,
//         contentType: false,
//         cache: false,
//         data: send_image_data(),
//         success: function (d) {
//             console.log(d)
//         }
//     })
// })